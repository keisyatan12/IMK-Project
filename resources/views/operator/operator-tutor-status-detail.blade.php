<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react@1.0.5/dist/index.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/css/output.css')
    <title>Operator - Tutor Status Detail</title>
</head>
<body>
    
@include('partials/header')
<div class="flex gap-6 lg:gap-14 flex-row relative">
    <div class="flex my-4 items-start">
        <div class="w-28 md:w-80 sidebar h-auto bg-yellow-200 rounded-xl md:py-8 py-2 px-2 md:px-4 gap-4">
            <a href="index.html" class="flex items-center gap-3 px-4 py-2">
                <img src="{{ ('images/image-3.svg') }}" alt="home" />
                <span class="text-black text-base hidden md:block">Dashboard</span>
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-2">
                <img src="{{ ('images/image-4.svg') }}" alt="user management" />
                <span class="text-black text-base hidden md:block">User management</span>
            </a>
            <div>
                <a href="tutor-management.html" class="flex items-center bg-yellow-300 rounded-md gap-3 px-4 py-2">
                    <img src="{{ ('images/image-5.svg') }}" alt="home" />
                    <span class="text-black text-base hidden md:block">Tutor management</span>
                </a>
                <ul class="ml-2 md:ml-14 py-3 flex flex-col gap-1 text-black">
                    <li class="py-2 px-4 bg-yellow-400 rounded-md">
                        <a href="tutor-list.html" class="text-xs md:text-base">Tutor Status</a>
                    </li>
                    <li class="py-2 px-4">
                        <a href="tutor-criteria-inbox.html" class="text-xs md:text-base">Tutor criteria inbox</a>
                    </li>
                    <li class="py-2 px-4 ">
                        <a href="tutor-review.html" class="text-xs md:text-base">Tutor review</a>
                    </li>
                </ul>
            </div>
            <a href="audit-logs.html" class="flex items-center gap-3 px-4 py-2">
                <img src="{{ ('images/image-6.svg') }}" alt="user management" />
                <span class="text-black text-base hidden md:block">Audit logs</span>
            </a>
            <div>
                <a href="payment-for-operator.html" class="flex items-center gap-3 px-4 py-2">
                    <img src="{{ ('images/image-5.svg') }}" alt="home" />
                    <span class="text-black text-base hidden md:block">Payment</span>
                </a>
                <ul class="ml-2 md:ml-14 py-3 flex flex-col gap-1 text-black">
                    <li class="py-2 px-4">
                        <a class="text-xs md:text-base" href="payment-for-operator.html">For operator</a>
                    </li>
                    <li class="py-2 px-4">
                        <a class="text-xs md:text-base" href="payment-from-parent.html">From parent</a>
                    </li>
                    <li class="py-2 px-4 ">
                        <a class="text-xs md:text-base" href="#">For tutor</a>
                    </li>
                    <li class="py-2 px-4 ">
                        <a class="text-xs md:text-base" href="#">Commision fee</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="flex items-center gap-3 px-4 py-2">
                <img src="{{ ('images/image-8.svg') }}" alt="home" />
                <span class="text-black text-base hidden md:block">Profile</span>
            </a>
            <a href="#" class="flex items-center gap-3 px-4 py-2">
                <img src="{{ ('images/image-9.svg') }}" alt="user management" />
                <span class="text-black text-base hidden md:block">Log out</span>
            </a>
        </div>
        <button id="sidebar-toggle" class="text-gray-700 mt-6 -ml-4 focus:outline-none">
          <img src="{{ ('images/menu.svg') }}" alt="menu" class="w-12" />
        </button>
    </div>
         <div class="my-4 w-full mr-10 md:mr-20 overflow-auto">
            <div class="flex justify-between items-end">
                <div>
                    <h1 class="text-xl lg:text-3xl font-bold">Tutor Management</h1>
                    <p class="text-sm lg:text-base">You can manage all section related to private tutor here</p>

                    <h2 class="mt-6 text-lg lg:text-xl font-semibold">Tutor Detail</h2>
                </div>
            </div>
            
            <div class="flex flex-col gap-3 mt-3">
                <div class="flex justify-between items-center">
                    <p>From parents</p>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="text" class="text-black py-1 px-4 rounded-md border border-yellow-500 w-40 md:w-56 lg:w-[440px] block" value="abcdefg"></input>
                    </div>
                </div>
                  <div class="flex justify-between items-center">
                    <p>Student level</p>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="text" value="SMP" class="text-black py-1 px-4 rounded-md border border-yellow-500 w-40 md:w-56 lg:w-[440px] block"></input>
                    </div>
                </div>
                  <div class="flex justify-between items-center">
                    <p>Student class</p>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="number" value="3" class="text-black py-1 px-4 rounded-md border border-yellow-500 w-40 md:w-56 lg:w-[440px] block"></input>
                    </div>
                </div>
                  <div class="flex justify-between items-center">
                    <p>Student school</p>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="text" value="SMP Harapan Mulia" class="text-black py-1 px-4 rounded-md border border-yellow-500 w-40 md:w-56 lg:w-[440px] block"></input>
                    </div>
                </div>
                  <div class="flex justify-between items-center">
                    <p>Subject need to be teach</p>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="text" value="Physics" class="text-black py-1 px-4 rounded-md border border-yellow-500 w-40 md:w-56 lg:w-[440px] block"></input>
                    </div>
                </div>
                  <div class="flex justify-between items-center">
                    <p>Day</p>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="text" value="Thursday" class="text-black py-1 px-4 rounded-md border border-yellow-500 w-40 md:w-56 lg:w-[440px] block"></input>
                    </div>
                </div>
                  <div class="flex justify-between items-center">
                    <p>Time</p>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="text" value="09.00 - 12.00" class="text-black py-1 px-4 rounded-md border border-yellow-500 w-40 md:w-56 lg:w-[440px] block"></input>
                    </div>
                </div>
                  <div class="flex justify-between items-center">
                    <p>Fee / Month</p>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="text" value="750.000" class="text-black py-1 px-4 rounded-md border border-yellow-500 w-40 md:w-56 lg:w-[440px] block"></input>
                    </div>
                </div>
                  <div class="flex justify-between items-center">
                    <p>Address</p>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="text" value="Jl. Sei kera komplek ABC block a-A17, medan kota, sumatera utara" class="text-black py-1 px-4 rounded-md border border-yellow-500 w-40 md:w-56 lg:w-[440px] block"></input>
                    </div>
                </div>
                  <div class="flex justify-between items-center">
                    <p>Additional notes</p>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="text" value="Tutor harus wanita dan mampu berbahasa inggris basic" class="text-black py-1 px-4 rounded-md border border-yellow-500 w-40 md:w-56 lg:w-[440px] block"></input>
                    </div>
                </div>
            </div>
            <h2 class="my-6 text-xl font-semibold">Tutor Schedule</h2>
            <div class="flex justify-between items-center">
                <p>May 2024</p>
                <input type="date" class="border border-yellow-500 rounded-md bg-white text-black py-1 px-4">
            </div>
            <div class="mt-4 w-full mx-auto">
                <div class="bg-white border border-[#555555] rounded-lg overflow-hidden">
                    <div class="flex items-center justify-between px-6 py-3 bg-blue-700">
                        <button id="prevMonth" class="text-white">Previous</button>
                        <h2 id="currentMonth" class="text-white"></h2>
                        <button id="nextMonth" class="text-white">Next</button>
                    </div>
                    <div class="grid grid-cols-7 gap-2 p-4" id="calendar">
                        <!-- Calendar Days Go Here -->
                    </div>
                    <div id="myModal" class="modal hidden fixed inset-0 flex items-center justify-center z-50">
                      <div class="modal-overlay absolute inset-0 bg-black opacity-50"></div>
                    
                      <div class="modal-container bg-white w-11/12 mdmax-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                        <div class="modal-content py-4 text-left px-6">
                          <div class="flex justify-between items-center pb-3">
                            <p class="text-2xl font-bold">Selected Date</p>
                            <button id="closeModal" class="modal-close px-3 py-1 rounded-full bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring">✕</button>
                          </div>
                          <div id="modalDate" class="text-xl font-semibold"></div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <a href="tutor-list.html" class="border border-blue-700 rounded-md text-blue font-semibold py-2 px-4 mt-4">Back</a>
            </div>
        </div>
    </div>

@include('partials/footer')
</body>
</html>