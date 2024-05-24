<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react@1.0.5/dist/index.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/css/output.css')
    <title>Tutor - Schedule</title>
</head>

<body>

    @include('partials/header')

    <div class="flex gap-6 lg:gap-14 flex-row relative">
        {{-- sidebarr --}}
        <div class="flex my-4 items-start">
            <div class="w-28 md:w-80 sidebar h-auto bg-yellow-200 rounded-xl md:py-8 py-2 px-2 md:px-4 gap-4">
                <a href="index.html" class="flex items-center gap-3 px-4 py-2">
                    <img src="{{ ('images/image-3.svg') }}" class=" w-7 h-7" alt="home" />
                    <span class="text-black text-base hidden md:block">Dashboard</span>
                </a>
                <a href="#" class="flex items-center bg-yellow-300 gap-3 px-4 py-2">
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
            <h2 class="my-6 text-xl font-semibold">Tutor Schedule</h2>
            <div class="flex justify-between items-center">
                <p>May 2024</p>
                <input type="date" class="border border-yellow-500 rounded-md bg-white text-black py-1 px-4">
            </div>
            <div class=" mt-7 w-full mx-auto">
                <div class="bg-white border border-[#555555] rounded-lg overflow-hidden">
                    <div class="flex items-center justify-between px-4 py-2 bg-blue-700">
                        <button id="prevMonth" class="text-white text-sm">Previous</button>
                        <h2 id="currentMonth" class="text-white text-sm"></h2>
                        <button id="nextMonth" class="text-white text-sm">Next</button>
                    </div>
                    <div class="grid grid-cols-7 gap-1 p-2 text-xs" id="calendar">
                        <!-- Calendar Days Go Here -->
                    </div>
                    <div id="myModal" class="modal hidden fixed inset-0 flex items-center justify-center z-50">
                        <div class="modal-overlay absolute inset-0 bg-black opacity-50"></div>
                        <div
                            class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                            <div class="modal-content py-2 text-left px-4">
                                <div class="flex justify-between items-center pb-2">
                                    <p class="text-lg font-bold">Selected Date</p>
                                    <button id="closeModal"
                                        class="modal-close px-2 py-1 rounded-full bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring">✕</button>
                                </div>
                                <div id="modalDate" class="text-lg font-semibold"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials/footer')
</body>

</html>