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
                    <span class="text-black text-base hidden md:block">Profile</span>
                </a>
                <ul class="ml-2 md:ml-14 py-3 flex flex-col gap-1 text-black">
                    <li class="py-2 px-4">
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

        <div class="flex flex-col gap-4 py-3">
            <div class="bg-yellow-100 w-1/2 mx-auto py-3 flex justify-center gap-4 rounded-lg">
                <span>
                    <a href="#" class="font-semibold p-3">Pembayaran</a>
                </span>
                <span>
                    <a href="#" class="underline font-semibold p-3">Cek Status Pembayaran</a>
                </span>
                <span>
                    <a href="#" class="font-semibold p-3">Riwayat Pembayaran</a>
                </span>
            </div>

            <div class="w-1/2 mx-auto  px-3 py-4 bg-yellow-100 rounded-lg">
                <div class="mx-auto w-full px-2">
                    <div class="font-bold text-center py-2 bg-green-300 rounded-lg">Transaksi Berhasil</div>
                </div>
                <div class="content mt-6 flex gap-4 px-2 py-3">
                    <img src="{{ asset('images/tutor.jpeg') }}" class="rounded-full" width="120" alt="" srcset="">
                    <div class="flex flex-col justify-between">
                        <div class="heading">
                            <h3 class="text-blue-600 font-bold">INV-*****</h3>
                            <small class="font-bold">BIMBEL PRIVATE</small>
                        </div>
                        <p>Bimbel Private 2024/2025</p>
                    </div>
                </div>
            </div>

            <div class="w-1/2 mx-auto  px-3 py-4 bg-yellow-100 rounded-lg">
                <div class="mx-auto w-full px-2">
                    <div class="font-bold text-center py-2 bg-red-300 rounded-lg">Transaksi Gagal</div>
                </div>
                <div class="content mt-6 flex gap-4 px-2 py-3">
                    <img src="{{ asset('images/tutor.jpeg') }}" class="rounded-full" width="120" alt="" srcset="">
                    <div class="flex flex-col justify-between">
                        <div class="heading">
                            <h3 class="text-blue-600 font-bold">INV-*****</h3>
                            <small class="font-bold">BIMBEL PRIVATE</small>
                        </div>
                        <p>Bimbel Private 2024/2025</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@include('partials/footer')
</body>
</html>
