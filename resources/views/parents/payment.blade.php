<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react@1.0.5/dist/index.css" rel="stylesheet">
    @vite('resources/css/app.css')
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

        <div class="flex justify-center gap-4">
            <!-- pembayaran -->
            <div class="w-96 flex flex-col gap-3">
                <h4 class="font-semibold">Pembayaran INV-XXX****</h4>

                <div class="flex flex-col gap-3 bg-yellow-50 p-4 rounded-2xl">
                    <div class="heading">
                        <h5 class="mb-3 font-semibold">Nomor Rekening Tujuan</h5>
                        <hr class="border-1 border-black">
                    </div>
                    <div class="flex flex-col gap-4">
                        <img src="{{ asset('images/image-11.png') }}" width="96" alt="" srcset="">
                        <div class="bg-blue-200 p-3 rounded-2xl">
                            <small>PT. Bimbel Private Indonesia</small>
                            <p class="font-semibold">17171-17171-17</p>
                        </div>
                    </div>
                </div>

                <div class="w-96">
                    <div class="flex flex-col gap-4 p-4 bg-yellow-50 rounded-2xl">
                        <div class="heading">
                            <h5 class="mb-3 font-semibold">Total Pembayaran</h5>
                            <hr class="border-1 border-black">
                        </div>
                        <div class="bg-blue-200 font-bold py-3 text-center rounded-2xl">RP. 896.999</div>
                        <div class="bg-orange-400 px-5 py-2 rounded-lg">
                            <small><strong>Penting</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex delectus rem dolore ipsam sed sapiente doloribus officiis quibusdam incidunt illum.</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- bukti pay -->
            <div class="w-96 flex flex-col gap-3">
                <h4 class="font-semibold">Upload Bukti Pembayaran</h4>

                <form action="" method="post">
                    <div class="flex flex-col gap-3 bg-yellow-50 p-4 rounded-2xl">

                        <div class="relative w-full h-36 rounded-2xl overflow-hidden bg-gray-200 flex items-center justify-center cursor-pointer">
                            <input type="file" class="absolute inset-0 opacity-0 w-full h-full cursor-pointer" />
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            <span class="opacity-0 absolute">Choose File</span>
                        </div>

                        <div class="flex flex-col">
                            <label for="">Bank Asal</label>
                            <select class="border border-black py-1 px-2 rounded-lg" name="" id="">
                                <option value="">Bank Jatim</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label for="">Nama Pemilik Rekening</label>
                            <input class="border border-black py-1 px-2 rounded-lg"type="text" name="" id="">
                        </div>
                        <div class="flex flex-col">
                            <label for="">Nomor Rekening</label>
                            <input class="border border-black py-1 px-2 rounded-lg"type="text" name="" id="">
                        </div>

                        <button class="bg-orange-500 py-2 rounded-2xl text-white font-semibold">Konfirmasi Pembayaran</button>


                    </div>
                </form>


            </div>

        </div>

    </div>

</div>

@include('partials/footer')
</body>
</html>
