<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react@1.0.5/dist/index.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/css/output.css')
    <title>{{ $page['title'] }}</title>

</head>
<body>

@include('partials/header')

<div class="flex gap-6 lg:gap-14 flex-row relative">
    <div class="flex my-4 items-start">
        {{-- INI SIDEBAR --}}
        <div class="w-28 md:w-80 sidebar h-full bg-yellow-200 rounded-xl md:py-8 py-2 px-2 md:px-4 gap-4">
            <a href="jobseeker-dashboard" class=" flex items-center gap-3 px-4 py-2">
                <img src="{{ asset('images/image-3.svg') }}" alt="dashboard" />
                <span class="text-black text-base hidden md:block">Dashboard</span>
            </a>
            <a href="jobseeker-alljob" class=" flex items-center gap-3 px-4 py-2">
                <img src="{{ asset('images/image-4.svg') }}" alt="AllJob" />
                <span class="text-black text-base hidden md:block">All Job</span>
            </a>
            <a href="jobseeker-history" class="bg-yellow-300 flex items-center gap-3 px-4 py-2">
                <img src="{{ asset('images/image-6.svg') }}" alt="history" />
                <span class="text-black text-base hidden md:block">Application History</span>
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-2">
                <img src="{{ asset('images/image-8.svg') }}" alt="home" />
                <span class="text-black text-base hidden md:block">Profile</span>
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-2">
                <img src="{{ asset('images/image-9.svg') }}" alt="user management" />
                <span class="text-black text-base hidden md:block">Log out</span>
            </a>
        </div>
        <button id="sidebar-toggle" class="text-gray-700 mt-6 -ml-4 focus:outline-none">
          <img src="{{ asset('images/menu.svg') }}" alt="menu" class="w-12" />
        </button>
    </div>

        <div class="my-4 w-full mr-10 lg:mr-20 overflow-auto min-h-screen">
            {{-- INI BODY --}}
            <div class="grid grid-cols-3 h-full">
                {{-- Content Body --}}
            </div>
        </div>
    </div>



    <script src="{{ asset('script.js') }}"></script>

@include('partials/footer')
</body>
</html>
