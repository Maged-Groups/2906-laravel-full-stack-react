<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')

</head>

<body>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="p-6">

            <h1 class="text-4xl text-center my-4 bg-sky-200 text-sky-600 py-5">All Posts</h1>

            <a href='{{ route('posts.create') }}'
                class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                <span
                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-transparent group-hover:dark:bg-transparent">
                    Add Post
                </span>
            </a>

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
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
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ Str::substr($post->title, 0, 20) }} ...
                            </th>
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
        </div>
    </div>




    <div class="p-4">

        @foreach ($posts as $post)
            <h2 class="border p-5 mb-4 rounded-md border-s-4 border-s-sky-900">{{ Str::substr($post->title, 0, 20) }}...
            </h2>
        @endforeach

    </div>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
