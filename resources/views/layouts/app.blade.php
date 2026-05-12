<!DOCTYPE html>
<html>
<head>
    <title>Shop Giày</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @include('layouts.header')

    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    @include('layouts.footer')

</body>
</html>