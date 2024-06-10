<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react@1.0.5/dist/index.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/css/output.css')
    <title>tes</title>
</head>
<body x-data="{ open: false }">

@include('partials/header')

<div class="flex gap-6 lg:gap-14 flex-row relative">
{{--Ini Sidebar --}}
<div class="flex my-4 items-start">
    {{-- INI SIDEBAR --}}
    <div class="w-28 md:w-80 sidebar h-full bg-yellow-200 rounded-xl md:py-8 py-2 px-2 md:px-4 gap-4">
        <a href={{route('JobSeeker.index')}} class=" flex items-center gap-3 px-4 py-2">
            <img src="{{ asset('images/image-3.svg') }}" alt="home" />
            <span class="text-black text-base hidden md:block">Dashboard</span>
        </a>
        <a href={{route('JobSeeker.alljob')}} class="bg-yellow-300  flex items-center gap-3 px-4 py-2">
            <img src="{{ asset('images/image-4.svg') }}" alt="user management" />
            <span class="text-black text-base hidden md:block">All Job</span>
        </a>
        <a href={{route('JobSeeker.history')}} class="flex items-center gap-3 px-4 py-2">
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
            <div class="flex flex-col gap-4 h-full">
                <div class="flex justify-center my-3">

                    <p class="text-3xl font-bold">Karir Terbaru Untuk Menjadi Tutor Di Seluruh Indonesia</p>
                </div>
                <div class="flex justify-center bg-white">

                    <div class="grid items-center grid-cols-3 gap-2 px-4 py-2 bg-slate-200 rounded-full">
                        <input class="w-full text-sm text-gray-700 bg-transparent border-none focus:border-none focus:ring-0 dark:text-white" placeholder="Search..." />
                        <p class="text-end">|</p>
                        <button type="button" class="p-2 bg-sky-500 text-white rounded-full">Search</button>
                    </div>
                </div>

                <div class="grid grid-cols-6 md:grid-cols-3 p-2 gap-6 bg-gray-200 rounded-md">
                    {{-- card --}}
                    <div class="flex flex-col gap-4 p-4 rounded-lg bg-white drop-shadow-lg ">
                        <span>
                            <img src="{{asset('images/tutor.jpeg')}}" alt="karir-1" height="25%">
                        </span>
                        <span>
                            <p class="font-bold text-lg">Matematic for 3 SMP</p>
                            <p class="text-sm">09.00 - 12.00</p>
                            <p class="text-sm">Rp. 750.000,00-/Month</p>
                        </span>
                        <span class="flex flex-row-reverse gap-4">
                            <button class="px-4 py-2 rounded-lg bg-cyan-500 text-white drop-shadow-md">
                                Apply Job
                            </button>
                            <button @click="open = true" class="px-4 py-2 rounded-lg bg-white drop-shadow-md">
                                Detail Job
                            </button>
                        </span>
                    </div>
                    {{-- card --}}
                    <div class="flex flex-col gap-4 p-4 rounded-lg bg-white drop-shadow-lg ">
                        <span>
                            <img src="#" alt="karir-1" height="50%" width="50%" >
                        </span>
                        <span>
                            <p class="font-bold text-lg">Matematic for 3 SMP</p>
                            <p class="text-sm">09.00 - 12.00</p>
                            <p class="text-sm">Rp. 750.000,00-/Month</p>
                        </span>
                        <span class="flex flex-row-reverse gap-4">
                            <button class="px-4 py-2 rounded-lg bg-cyan-500 text-white drop-shadow-md">
                                Apply Job
                            </button>
                            <button class="px-4 py-2 rounded-lg bg-white drop-shadow-md">
                                Detail Job
                            </button>
                        </span>
                    </div>
                    {{-- card --}}
                    <div class="flex flex-col gap-4 p-4 rounded-lg bg-white drop-shadow-lg">
                        <span>
                            <img src="#" alt="karir-1" height="50%" width="50%" >
                        </span>
                        <span>
                            <p class="font-bold text-lg">Matematic for 3 SMP</p>
                            <p class="text-sm">09.00 - 12.00</p>
                            <p class="text-sm">Rp. 750.000,00-/Month</p>
                        </span>
                        <span class="flex flex-row-reverse gap-4">
                            <button class="px-4 py-2 rounded-lg bg-cyan-500 text-white drop-shadow-md">
                                Apply Job
                            </button>
                            <button  class="px-4 py-2 rounded-lg bg-white drop-shadow-md">
                                Detail Job
                            </button>
                        </span>
                    </div>
                    {{-- card --}}
                    <div class="flex flex-col gap-4 p-4 rounded-lg bg-white drop-shadow-lg">
                        <span>
                            <img src="#" alt="karir-1" height="50%" width="50%" >
                        </span>
                        <span>
                            <p class="font-bold text-lg">Matematic for 3 SMP</p>
                            <p class="text-sm">09.00 - 12.00</p>
                            <p class="text-sm">Rp. 750.000,00-/Month</p>
                        </span>
                        <span class="flex flex-row-reverse gap-4">
                            <button class="px-4 py-2 rounded-lg bg-cyan-500 text-white drop-shadow-md">
                                Apply Job
                            </button>
                            <button class="px-4 py-2 rounded-lg bg-white drop-shadow-md">
                                Detail Job
                            </button>
                        </span>
                    </div>
                </div>

                <div class="h-full">


                </div>
            </div>
        </div>
    </div>



    <script src="{{ asset('script.js') }}"></script>

@include('partials/footer')
</body>
</html>
