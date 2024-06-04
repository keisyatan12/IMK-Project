<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react@1.0.5/dist/index.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/css/output.css')
    <title>@yield('title')</title>
</head>

<body>
    {{-- header --}}
    @include('tutor/layout/header')

    <div class="flex gap-6 lg:gap-14 flex-row relative">
        {{-- sidebarr --}}
        @include('tutor/layout/sidebar')

        @yield('content')
    </div>

    {{-- footer --}}
    @include('tutor/layout/footer')
</body>

</html>