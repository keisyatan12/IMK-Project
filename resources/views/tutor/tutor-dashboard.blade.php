<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react@1.0.5/dist/index.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/css/output.css')
    <title>Tutor - Dashboard</title>
</head>

<body>

    @include('partials/header')

    <div class="flex gap-6 lg:gap-14 flex-row relative">
        {{-- sidebarr --}}
        <div class="flex my-4 items-start">
            <div class="w-28 md:w-80 sidebar h-auto bg-yellow-200 rounded-xl md:py-8 py-2 px-2 md:px-4 gap-4">
                <a href="index.html" class="flex items-center bg-yellow-300 gap-3 px-4 py-2">
                    <img src="{{ ('images/image-3.svg') }}" class=" w-7 h-7" alt="home" />
                    <span class="text-black text-base hidden md:block">Dashboard</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-2">
                    <img src="{{ ('images/calendar.png') }}" class=" w-7 h-7" alt="user management" />
                    <span class="text-black text-base hidden md:block">Schedule</span>

                    <a href="#" class="flex items-center gap-3 px-4 py-2">
                        <img src="{{ ('images/cash-payment.png') }}" class=" w-7 h-7" alt="home" />
                        <span class="text-black text-base hidden md:block">Payment</span>
                    </a>

                    <a href="#" class="flex items-center gap-3 px-4 py-2">
                        <img src="{{ ('images/image-8.svg') }}" class=" w-7 h-7" alt="home" />
                        <span class="text-black text-base hidden md:block">Profile</span>
                    </a>

                    <div class=" mt-40">
                        <a href="#" class="flex items-center gap-3 px-4 py-2">
                            <img src="{{ ('images/image-9.svg') }}" alt="user management" />
                            <span class="text-black text-base hidden md:block">Log out</span>
                        </a>
                    </div>

            </div>
            <button id="sidebar-toggle" class="text-gray-700 mt-6 -ml-4 focus:outline-none">
                <img src="{{ ('images/menu.svg') }}" alt="menu" class="w-12" />
            </button>
        </div>

        <div class="w-full my-4 mr-10 lg:mr-20 overflow-auto flex flex-col">
            <div class="flex justify-center gap-16 items-center md:flex-row">
                <div class="flex flex-col gap-2">
                    <h1 class="text-4xl lg:text-4xl font-bold">Selamat Datang Rekan Tutor</h1>
                    <h1 class="text-4xl lg:text-4xl font-bold">John Doe</h1>
                    <p class="text-sm font-bold lg:text-base mt-4">Kami di sini berperan sebagai perantara orang tua dan
                        guru privat
                    </p>
                </div>
                <div class="flex gap-2">
                    <img class=" w-[396px]" src="{{ ('images/tutor.jpeg') }}" alt="" />
                </div>
            </div>
            <div class="flex justify-center items-center gap-3 py-3">
                <div
                    class="flex flex-row items-center justify-center gap-36 w-[1211px] h-auto top-[519px] bg-[#FFFDF0] border-2 border-[#00BFFF] rounded-[42px] py-4">
                    <div
                        class="flex flex-col items-center w-[184px] h-auto bg-[#FFDC5F] border border-[#F5C400] shadow-[7px_7px_30px_rgba(0,0,0,0.25)] rounded-[14px] p-4">
                        <img src="{{('images/teacher.png')}}" alt="teacher" class=" w-auto h-[100px] object-contain">
                        <p class="text-center text-black text-2xl font-bold">123</p>
                        <p class="mt-2 text-center font-sans font-bold">Teacher</p>
                    </div>
                    <div
                        class="flex flex-col items-center w-[184px] h-auto bg-[#FFDC5F] border border-[#F5C400] shadow-[7px_7px_30px_rgba(0,0,0,0.25)] rounded-[14px] p-4">
                        <img src="{{('images/books.png')}}" alt="books" class="w-auto h-[100px] object-contain">
                        <p class="text-center text-black text-2xl font-bold">123</p>
                        <p class="mt-2 text-center font-sans font-bold">Books</p>
                    </div>
                    <div
                        class="flex flex-col items-center w-[184px] h-auto bg-[#FFDC5F] border border-[#F5C400] shadow-[7px_7px_30px_rgba(0,0,0,0.25)] rounded-[14px] p-4">
                        <img src="{{('images/reading.png')}}" alt="reading" class="w-auto h-[100px] object-contain">
                        <p class="text-center text-black text-2xl font-bold">123</p>
                        <p class="mt-2 text-center font-sans font-bold">Reading</p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    @include('partials/footer')
</body>

</html>