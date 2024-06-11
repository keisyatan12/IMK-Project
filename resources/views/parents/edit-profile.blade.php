<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react@1.0.5/dist/index.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/css/output.css')
    <title>Superadmin - Audit</title>
</head>
<body>

@include('partials/header')

<div class="flex gap-6 lg:gap-14 flex-row relative">

    <!-- SIDEBAR -->
    <div class="flex my-4 items-start">
        <div class="w-28 md:w-80 sidebar h-auto bg-yellow-200 rounded-xl md:py-8 py-2 px-2 md:px-4 gap-4">
            <a href="index.html" class="flex items-center gap-3 px-4 py-2">
                <img src="{{ ('images/image-3.svg') }}" alt="home" />
                <span class="text-black text-base hidden md:block">Dashboard</span>
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-2">
                <img src="{{ ('images/image-5.svg') }}" alt="tutor" />
                <span class="text-black text-base hidden md:block">Tutor</span>
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-2">
                <img src="{{ ('images/cash-payment.png') }}" width="28" alt="tutor" />
                <span class="text-black text-base hidden md:block">Payment</span>
            </a>
            <div>
                <a href="tutor-management.html" class="flex items-center gap-3 px-4 py-2">
                    <img src="{{ ('images/image-5.svg') }}" alt="home" />
                    <span class="text-black font-bold text-base hidden md:block">Profile</span>
                </a>
                <ul class="ml-2 md:ml-14 py-3 flex flex-col gap-1 text-black">
                    <li class="py-2 px-4 bg-yellow-400">
                        <a href="tutor-list.html" class="text-xs md:text-base">Edit profile</a>
                    </li>
                    <li class="py-2 px-4">
                        <a href="tutor-criteria-inbox.html" class="text-xs md:text-base">Change password</a>
                    </li>
                </ul>
            </div>

            <a href="#" class="flex items-center gap-3 px-4 py-2">
                <img src="{{ ('images/image-9.svg') }}" alt="user management" />
                <span class="text-black text-base hidden md:block">Log out</span>
            </a>
        </div>
        <button id="sidebar-toggle" class="text-gray-700 mt-6 -ml-4 focus:outline-none">
          <img src="{{ ('images/menu.svg') }}" alt="menu" class="w-12" />
        </button>
    </div>

    <!-- CONTENT -->
    <div class="my-4 px-4 w-full mr-10 lg:mr-20 overflow-auto">
        <div class="flex justify-between gap-3 md:items-end md:flex-row flex-col">
            <div>
                {{-- <h1 class="text-xl lg:text-3xl font-bold">Orang Tua Naufal</h1> --}}
                <input type="text" class="font-bold border-2 shadow-md px-2" value="Orang Tua Naufal" name="" id="">
                <p class="text-sm lg:text-base">Edit info</p>
            </div>
        </div>

        <form action="" method="post">
            <div class="flex justify-between mt-4">
                <div class="flex flex-col w-4/6  gap-6">
                    <div class="flex">
                        <span class="w-1/2">
                            <h5 class="font-bold">Emaihl</h5>
                            <input type="text" class="font-bold border-2 shadow-md px-2" value="snaisncaskask@gmail.com" name="" id="">
                        </span>
                        <span class="w-1/2">
                            <h5 class="font-bold">Phone</h5>
                            <input type="text" class="border-2 shadow-md px-2" value="0823112783232" name="" id="">
                        </span>
                    </div>
                    <span class="">
                        <h5 class="font-bold">Address</h5>
                        <input type="text" class="border-2 shadow-md px-2" value="Jalan Setiabudi No.99" name="" id="">
                    </span>
                    <div class="mt-16 p-4 flex justify-end gap-3">
                        <div class="">
                            <button class="border-2 bg-white font-semibold px-4 py-1 rounded-lg">Cancel</button>
                        </div>
                        <div class="">
                            <button class="bg-blue-500 text-white font-semibold px-4 py-1 rounded-md">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="w-2/6">
                    <div class="relative w-36 h-36 rounded-full overflow-hidden bg-gray-200 flex items-center justify-center cursor-pointer">
                        <input type="file" class="absolute inset-0 opacity-0 w-full h-full cursor-pointer" />
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        <span class="opacity-0 absolute">Choose File</span>
                      </div>
                    {{-- <div class="w-16 h-16 bg-blue-500 rounded-full"></div> --}}
                </div>
            </div>
        </form>
    </div>

</div>

@include('partials/footer')
</body>
</html>
