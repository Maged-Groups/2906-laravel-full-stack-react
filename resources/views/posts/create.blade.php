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

    <form class="max-w-sm mx-auto" method="post" action="{{ route('posts.store') }}">

        @csrf

        {{-- Title --}}
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post title</label>
        <input type="text" id="title" name="title" minlength="10" maxlength="255"
            aria-describedby="helper-text-explanation"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Post Title">

        {{-- Body --}}
        <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post body</label>
        <textarea id="body" name="body" rows="4"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Post content..."></textarea>

        {{-- post_status_id --}}
        <label for="post_status_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post
            Status</label>
        <select id="post_status_id" name='post_status_id'
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            <option>( Select Post Status )</option>

            @foreach ($post_statuses as $post_status)
                <option value="{{ $post_status->id }}">{{ $post_status->type }}</option>
            @endforeach

        </select>




        <div class="flex rounded-md shadow-xs my-4 justify-end" role="group">
            <button type="submit"
                class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                Add
            </button>
            <a href='{{ route('posts.index') }}'
                class="px-4 py-2 text-sm font-medium text-white bg-red-500 border border-red-200 rounded-e-lg hover:bg-red-800 hover:text-gray-200 focus:z-10 focus:ring-2 focus:ring-red-700 focus:text-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                Cancel
            </a>
        </div>


    </form>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
