<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body>
    {{-- Local Env --}}
    @include('components.local-notification')

    {{-- Success Session --}}
    @include('components.sessions.success')


    {{-- Header --}}
    @include('components.header')

    {{-- page Content --}}
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md hidden md:block">
            <div class="p-4 border-b">
                <h1 class="text-xl font-bold text-gray-800 flex items-center">
                    <i class="fas fa-chart-line mr-2 text-blue-500"></i>
                    Dashboard
                </h1>
            </div>
            <div class="p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('home') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <i class="fas fa-home text-gray-500 w-5"></i>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('posts.index') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <i class="fas fa-users text-gray-500 w-5"></i>
                            <span class="ml-3">Posts</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <i class="fas fa-shopping-cart text-gray-500 w-5"></i>
                            <span class="ml-3">Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <i class="fas fa-chart-pie text-gray-500 w-5"></i>
                            <span class="ml-3">Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                            <i class="fas fa-cog text-gray-500 w-5"></i>
                            <span class="ml-3">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        {{-- Right content --}}
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between p-4">
                    <div class="flex items-center md:hidden">
                        <button id="sidebarToggle" class="text-gray-500 hover:text-gray-600">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <input type="text" placeholder="Search..."
                                class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>
                        <button class="p-2 text-gray-500 hover:text-gray-600">
                            <i class="fas fa-bell text-xl"></i>
                        </button>
                        <div class="flex items-center space-x-2">
                            <img src="https://via.placeholder.com/40" alt="User" class="w-8 h-8 rounded-full">
                            <span class="hidden md:inline">John Doe</span>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            @yield('content')
        </div>
    </div>

    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        // Simple sidebar toggle for mobile
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.querySelector('aside').classList.toggle('hidden');
        });
    </script>
</body>

</html>
