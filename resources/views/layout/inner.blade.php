<!DOCTYPE html>
<html lang="en">


@include('components.head')


<body>

    @include('components.header')

    <div class="p-4 border-2 m-5">
        @yield('content')
    </div>

    <footer class="p-4 bg-gray-800 text-white text-center">
        Fotoer
    </footer>


    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
