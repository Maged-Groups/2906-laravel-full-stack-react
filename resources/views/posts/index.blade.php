@extends('layout.inner')

@section('page_title', 'Posts Page | My Website')

@section('header_title', 'Posts Page')

@section('content')
    <div class="grid gap-3">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg flex flex-col">
            <div class="p-6 flex flex-col">

                <h1 class="text-4xl text-center my-4 bg-sky-200 text-sky-600 py-5">All Posts</h1>

                @auth
                    <a href='{{ route('posts.create') }}'
                        class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                        <span
                            class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-transparent group-hover:dark:bg-transparent">
                            Add Post
                        </span>
                    </a>
                @else
                    <div class="p-3 bg-green-400">
                        <p>Please <x-button text='Login' size='lg' /> to be able to add posts</p>
                    </div>
                @endauth

                <div>
                    <x-button text='Large Button' size='lg' />
                    <x-button text='Cancel' variant='danger' />
                    <x-button text='Print' variant='outline-success' />
                    <x-button text='Delete' variant='danger' />
                    <x-button text='Save' variant='success' />
                </div>
            </div>
        </div>

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th>#</th>
                    <th scope="col" class="px-6 py-3">
                        Post
                    </th>
                    <th scope="col" class="px-6 py-3">
                        user
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Reactions
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span>Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td>{{ $loop->iteration }}</td>
                        <td @class([
                            'px-6 py-4 font-medium whitespace-nowrap dark:text-white',
                            'text-green-500' => $loop->even,
                            'text-red-500' => $loop->odd,
                        ])>
                            {{ Str::substr($post->title, 0, 20) }} ...
                        </td>
                        <td class="px-6 py-4">
                            {{ $post->user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $post->reactions_count }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $post->created_at->diffForHumans() }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('posts.show', $post->id) }}"
                                class="font-medium text-green-600 dark:text-green-500 hover:underline">View</a>
                            <a href="{{ route('posts.edit', $post->id) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="{{ route('posts.destroy', $post->id) }}"
                                class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                @endforeach



            </tbody>
        </table>


        <div class="p-4">

            @foreach ($posts as $post)
                <h2 class="border p-5 mb-4 rounded-md border-s-4 border-s-sky-900">
                    {{ Str::substr($post->title, 0, 20) }}...
                </h2>
            @endforeach

        </div>
    </div>
@endsection
