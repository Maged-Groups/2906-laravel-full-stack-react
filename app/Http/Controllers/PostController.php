<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\PostStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Keep data in the cache for 1 minute
        // $ttl = 365 * 24 * 60 * 60;
        $ttl = 60;
        $posts = Cache::remember('all_posts', $ttl, function () {
                return Post::with('user')->orderByDesc('id')->limit(5)->get();
        });

        // $posts = DB::table('posts')
        // ->join('users', 'users.id', 'user_id')
        // ->get();
        // return $posts;

        // return view('posts.index', ['posts' => $posts]);
        return view('posts.index', compact('posts'));

    }

    public function by_user($user_id)
    {

        // Same results
        // $posts = Post::where('user_id', '=', $user_id)->get();
        // $posts = DB::table('posts')->where('user_id', '=', $user_id)->get();
        // $posts = Post::where('user_id', $user_id)->get();
        $posts = DB::table('posts')->where('user_id', $user_id)->get();
        return PostResource::collection($posts);
    }

    public function ids_by_post_status($post_status_id)
    {

        // Get a single column
        $posts = DB::table('posts')
            ->where('post_status_id', '=', $post_status_id)
            ->pluck('id');

        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post_statuses = PostStatus::orderBy('type')->get();

        // return $post_statuses;
        return view('posts.create', compact('post_statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {

        $data = $request->validated();

        $data['user_id'] = auth()->user()->id;

        // return $data;
        $added_post = Post::create($data);

        if ($added_post)

        // Clear all_posts cache
        Cache::forget('all_posts');

            return redirect()->route('posts.index')->with('success', 'Post Added Successfully');

        return redirect()->route('posts.create')->with('fail', 'Post faild to add, reload the page and try again');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {


        $post->load(['comments.replies', 'reactions.reactionType']);

        return view('posts.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return 'form to edit the post';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        // return $request->validated();
        $data = $request->validated();

        $updated = $post->update($data);

        if ($updated)
            return new PostResource($post);

        return 'Post faild to update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // return Post::destroy($post->id);

        // OR

        return $post->delete();
    }

    public function deleted()
    {
        // Get only soft deleted records
        $posts = Post::onlyTrashed()->get();

        return PostResource::collection($posts);
    }

    public function restore_post($id)
    {
        $post = Post::onlyTrashed()->find($id);

        // OR
        // $post = Post::withTrashed()->find($id);
        // OR

        // $post = Post::withTrashed()->where('id', $id)->first();

        if ($post === null)
            return 'Not found';

        if ($post->restore())
            return 'Post Restored Successfully';

        return 'Post failed to restore';
    }
}