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
            <a href={{route('JobSeeker.index')}} class=" flex items-center gap-3 px-4 py-2">
                <img src="{{ asset('images/image-3.svg') }}" alt="dashboard" />
                <span class="text-black text-base hidden md:block">Dashboard</span>
            </a>
            <a href={{route('JobSeeker.alljob')}} class=" flex items-center gap-3 px-4 py-2">
                <img src="{{ asset('images/image-4.svg') }}" alt="AllJob" />
                <span class="text-black text-base hidden md:block">All Job</span>
            </a>
            <a href={{route('JobSeeker.history')}} class="bg-yellow-300 flex items-center gap-3 px-4 py-2">
                <img src="{{ asset('images/image-6.svg') }}" alt="history" />
                <span class="text-black text-base hidden md:block">Application History</span>
            </a>

            <a href={{route('JobSeeker.profil')}} class="flex items-center gap-3 px-4 py-2">
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
            <div class="flex flex-col gap-4 h-full ">
                {{-- Content Body --}}
                <div class="flex justify-between gap-3 md:items-end md:flex-row flex-col ">
                    <div>
                        <h1 class="text-xl lg:text-3xl font-bold">{{$page['title']}}</h1>
                        <p class="text-sm lg:text-base">Welcome, John Doe. You can see the log activities from all user here.</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="role" class="text-sm lg:text-base">Filter by status</label>
                        <select class="py-2 px-3 border border-yellow-500 rounded-md bg-white text-black" name="role" id="role">
                            <option value="hire">hire</option>
                            <option value="pending">pending</option>
                            <option value="reject">reject</option>
                        </select>
                    </div>
                </div>

            <div class="text-black flex flex-col gap-4 ">
                {{-- CARD --}}
                <div class=" flex justify-between bg-slate-300 p-3 rounded-lg">
                    <div class="flex gap-4">
                        <span class="bg-slate-100 rounded-md p-1">

                            <img src="" alt="profile-1">
                        </span>
                        <span class="flex flex-col gap-1">
                            <p class="text-xs">@adam</p>
                            <p class="text-base">Adam Gunawan</p>
                            <p class="text-lg font-bold">SMP</p>
                        </span>
                    </div>
                    <div class="flex justify-center items-center">
                        <span class="bg-green-600 rounded-full py-1 px-8">

                            <p class="text-white font-medium text-lg">Hire</p>
                        </span>
                    </div>
                </div>
                {{-- CARD --}}
                <div class=" flex justify-between bg-slate-300 p-3 rounded-lg">
                    <div class="flex gap-4">
                        <span class="bg-slate-100 rounded-md p-1">

                            <img src="" alt="profile-1">
                        </span>
                        <span class="flex flex-col gap-1">
                            <p class="text-xs">@adam</p>
                            <p class="text-base">Adam Gunawan</p>
                            <p class="text-lg font-bold">SMP</p>
                        </span>
                    </div>
                    <div class="flex justify-center items-center">
                        <span class="bg-gray-600 rounded-full py-1 px-8">

                            <p class="text-white font-medium text-lg">Pending</p>
                        </span>
                    </div>
                </div>
                {{-- CARD --}}
                <div class=" flex justify-between bg-slate-300 p-3 rounded-lg">
                    <div class="flex gap-4">
                        <span class="bg-slate-100 rounded-md p-1">

                            <img src="" alt="profile-1">
                        </span>
                        <span class="flex flex-col gap-1">
                            <p class="text-xs">@adam</p>
                            <p class="text-base">Adam Gunawan</p>
                            <p class="text-lg font-bold">SMP</p>
                        </span>
                    </div>
                    <div class="flex justify-center items-center">
                        <span class="bg-red-600 rounded-full py-1 px-8">

                            <p class="text-white font-medium text-lg">Reject</p>
                        </span>
                    </div>
                </div>
                {{-- CARD --}}
                <div class=" flex justify-between bg-slate-300 p-3 rounded-lg">
                    <div class="flex gap-4">
                        <span class="bg-slate-100 rounded-md p-1">

                            <img src="" alt="profile-1">
                        </span>
                        <span class="flex flex-col gap-1">
                            <p class="text-xs">@adam</p>
                            <p class="text-base">Adam Gunawan</p>
                            <p class="text-lg font-bold">SMP</p>
                        </span>
                    </div>
                    <div class="flex justify-center items-center">
                        <span class="bg-red-600 rounded-full py-1 px-8">

                            <p class="text-white font-medium text-lg">Reject</p>
                        </span>
                    </div>
                </div>
                {{-- CARD --}}
                <div class=" flex justify-between bg-slate-300 p-3 rounded-lg">
                    <div class="flex gap-4">
                        <span class="bg-slate-100 rounded-md p-1">

                            <img src="" alt="profile-1">
                        </span>
                        <span class="flex flex-col gap-1 ">
                            <p class="text-xs">@adam</p>
                            <p class="text-base">Adam Gunawan</p>
                            <p class="text-lg font-bold">SMP</p>
                        </span>
                    </div>
                    <div class="flex justify-center items-center">
                        <span class="bg-red-600 rounded-full py-1 px-8">

                            <p class="text-white font-medium text-lg">Reject</p>
                        </span>
                    </div>
                </div>
            </div>


                <div class="flex justify-between md:flex-row flex-col gap-3 md:items-center mt-6">
                    <div>
                        <label for="role">Rows per page</label>
                        <select class="py-2 px-3 bg-yellow-100 text-black rounded-md" name="role" id="role">
                            <option value="5">5</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="flex gap-2 flex-row items-center">
                        <span class="py-2 px-4 bg-yellow-100 text-black rounded-md"> < </span>
                        <span class="py-2 px-4 bg-yellow-100 text-black rounded-md"> 1 </span>
                        <span>/ 1</span>
                        <span class="py-2 px-4 bg-yellow-100 rounded-md text-black"> > </span>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="{{ asset('script.js') }}"></script>

@include('partials/footer')
</body>
</html>
