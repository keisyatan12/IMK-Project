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
                <a href="tutor-management.html" class="flex items-center gap-3 px-4 py-2">
                    <img src="{{ ('images/image-5.svg') }}" alt="home" />
                    <span class="text-black text-base hidden md:block">Tutor management</span>
                </a>
                <ul class="ml-2 md:ml-14 py-3 flex flex-col gap-1 text-black">
                    <li class="py-2 px-4">
                        <a href="tutor-list.html" class="text-xs md:text-base">Tutor list</a>
                    </li>
                    <li class="py-2 px-4">
                        <a href="tutor-criteria-inbox.html" class="text-xs md:text-base">Tutor criteria inbox</a>
                    </li>
                    <li class="py-2 px-4 ">
                        <a href="tutor-review.html" class="text-xs md:text-base">Tutor review</a>
                    </li>
                </ul>
            </div>
            <a href="audit-logs.html" class="flex items-center bg-yellow-300 rounded-md gap-3 px-4 py-2">
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
           
        <div class="my-4 w-full mr-10 lg:mr-20 overflow-auto">
            <div class="flex justify-between gap-3 md:items-end md:flex-row flex-col">
                <div>
                    <h1 class="text-xl lg:text-3xl font-bold">Audit Logs</h1>
                    <p class="text-sm lg:text-base">Welcome, John Doe. You can see the log activities from all user here.</p>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="role" class="text-sm lg:text-base">Select by role</label>
                    <select class="py-2 px-3 border border-yellow-500 rounded-md bg-white text-black" name="role" id="role">
                        <option value="Admin">Admin</option>
                        <option value="Parents">Parents</option>
                        <option value="Job seeker">Job Seeker</option>
                        <option value="Superadmin">Superadmin</option>
                    </select>
                </div>
            </div>
            <table class="mt-6 w-full">
              <thead class="bg-blue-800 rounded-xl border border-blue-800">
                <tr class="rounded-md">
                  <th class="text-white text-left px-3 py-1 lg:px-10 lg:py-3">Username</th>
                  <th class="text-white text-left px-3 py-1 lg:px-10 lg:py-3">Role</th>
                  <th class="text-white text-left px-3 py-1 lg:px-10 lg:py-3">Actions</th>
                  <th class="text-white text-left px-3 py-1 lg:px-10 lg:py-3">Timestamp</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border border-yellow-500">
                  <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">@JohnDoe</td>
                  <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Job Seeker</td>
                  <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Insert</td>
                  <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">2024-05-14 08:30:00</td>
                </tr>
                <tr class="border border-yellow-500">
                  <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">@SarahWilliams</td>
                  <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Admin</td>
                  <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Update</td>
                  <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">2024-05-14 08:30:00</td>
                </tr>
                <tr class="border border-yellow-500">
                  <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">@EmmaW</td>
                  <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Parents</td>
                  <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Insert</td>
                  <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">2024-05-14 08:30:00</td>
                </tr>
                <tr class="border border-yellow-500">
                  <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">@KatteWil</td>
                  <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Superdmin</td>
                  <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Delete</td>
                  <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">2024-05-14 08:30:00</td>
                </tr>
              </tbody>
            </table>
            <div class="flex justify-between md:flex-row flex-col gap-3 md:items-center mt-6">
                <div>
                    <label for="role">Rows per page</label>
                    <select class="py-2 px-3 bg-yellow-100 text-black rounded-md" name="role" id="role">
                        <option value="1">1</option>
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

    <!--
    <footer class="bg-[#001840] py-8 px-8">
        <div class="container mx-auto flex flex-row gap-3 items-center">
            <img src="{{ ('images/logo.png') }}" alt="logo" class="w-14"/>
            <span class="text-white font-bold text-xl">Private Tutor Indonesia</span>
        </div>
        <div class="flex justify-between mt-8 mx-auto container gap-6 items-start flex-col md:flex-row">
            <div>
                <h3 class="text-yellow-500 font-semibold text-2xl">Let's connect with us!</h3>
                <ul class="text-white flex flex-col gap-2 mt-3">
                    <li>Adress: Gedung C Fasilkom-TI, Universitas Sumatera Utara, 
                                 Jl. Alumni No.3, Padang Bulan, Kota Medan, 20155</li>
                    <li>Phone number: 628199209666</li>
                    <li>Email: fasilkomti@usu.ac.id</li>
                    <li class="flex items-center">
                        <img src="{{ ('images/image-20.png') }}" alt="facebook" class="w-10"/>
                        <img src="{{ ('images/image-19.png') }}" alt="facebook" class="ml-8 w-10"/>
                        <img src="{{ ('images/image-17.png') }}" alt="facebook" class="w-24"/>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-yellow-500 font-semibold text-2xl">Our menu</h3>
                <ul class="text-white flex flex-col gap-2 mt-3">
                    <li>Beranda</li>
                    <li>Tentang kami</li>
                    <li>Cari lowongan mengajar</li>
                    <li>Temukan tutor les yang sesuai kriteria</li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="{{ asset('script.js') }}"></script>
-->
@include('partials/footer')
</body>
</html>