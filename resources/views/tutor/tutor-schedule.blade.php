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
        @include('partials/sidebar')

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