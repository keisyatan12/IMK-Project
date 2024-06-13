<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/css/output.css')
    <title>@yield('title')</title>
</head>
<body>
        @include('operator/layout/header-operator')
        <div class="flex lg:gap-14">
            @include('operator/layout/sidebar-operator')
            <div class="w-full flex flex-col md:-ml-72 transition-all ease-in-out" id="main-content">
                @yield('content')
            </div>
        </div>
        @include('operator/layout/footer-operator')
        <script src="{{ asset('script.js') }}"></script>
</body>
</html>