<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/css/output.css')
    <title>@yield('title')</title>
    <style>
        .input-field {
            padding: 0.5rem;
            border: 1px solid #1A2130;
            border-radius: 0.25rem;
            width: 100%;
        }

        .label {
            flex: 1;
            padding-right: 0.5rem;
        }

        .form-row {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .form-row div {
            flex: 1;
        }

        .form-container {
            background-color: white;
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .flex-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
        @include('superadmin/layout/header-superadmin')
        <div class="flex lg:gap-14">
            @include('superadmin/layout/sidebar-superadmin')
            <div class="w-full flex flex-col md:-ml-72 transition-all ease-in-out" id="main-content">
                @yield('content')   
            </div>
        </div>
        @include('superadmin/layout/footer-superadmin')
        <script src="{{ asset('script.js') }}"></script>
</body>
</html>