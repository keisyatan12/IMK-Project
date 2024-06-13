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

@include('JobSeeker/layout/header-jobseeker')

<div class="flex lg:gap-14">
    @include('JobSeeker/layout/sidebar-jobseeker')
    <div class="w-full flex flex-col md:-ml-72 transition-all ease-in-out" id="main-content">
        @yield('content')
    </div>
</div>
    <script src="{{ asset('script.js') }}"></script>
@include('JobSeeker/layout/footer-jobseeker')
</body>
</html>
