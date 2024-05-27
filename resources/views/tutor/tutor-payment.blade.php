<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react@1.0.5/dist/index.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/css/output.css')
    <title>Tutor - Payment</title>
</head>

<body>

    @include('partials/header')

    <div class="flex gap-6 lg:gap-14 flex-row relative">
        {{-- sidebarr --}}
        @include('partials/sidebar')

        <div class="w-full my-4 mr-10 lg:mr-20 overflow-auto flex flex-col">
            <div class="my-4 w-full mr-10 md:mr-20 overflow-auto">
                <div class="flex justify-between md:items-end flex-col md:flex-row">
                    <div>
                        <h1 class="text-xl lg:text-3xl font-bold">Payment</h1>
                        <p class="text-sm lg:text-base">You can check all payment status here</p>
                    </div>
                    <button class="flex flex-col gap-2 items-center">
                        <div
                            class="relative w-[181px] h-[41px] bg-[#439BB8]  hover:bg-[#2b697d] rounded-[16px] flex items-center justify-center">
                            <img src="{{('images/printing.png')}}" alt="" class="absolute left-2 top-2 w-7 h-7 ml-3">
                            <div
                                class="absolute inset-0 flex items-center justify-end mr-6 text-white font-poppins font-semibold text-[17px] leading-[26px]">
                                Cetak Jadwal
                            </div>
                        </div>
                    </button>

                </div>
                <table class="mt-6 w-full">
                    <thead class="bg-blue-800 rounded-xl border border-blue-800">
                        <tr class="rounded-md">
                            <th class="text-white text-left px-3 py-1 lg:px-10 lg:py-3">Username</th>
                            <th class="text-white text-left px-3 py-1 lg:px-10 lg:py-3">Province</th>
                            <th class="text-white text-left px-3 py-1 lg:px-10 lg:py-3">Payment date</th>
                            <th class="text-white text-left px-3 py-1 lg:px-10 lg:py-3">Status</th>
                            <th class="text-white text-left px-3 py-1 lg:px-10 lg:py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border border-yellow-500">
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">@JohnDoe</td>
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Sumatera Utara</td>
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">-</td>
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">
                                <p class="py-2 px-2 rounded-md text-sm bg-red-300 text-black text-center">Not Completed
                                </p>
                            </td>
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left"><a href="payment-for-operator-detaill.html"
                                    class="underline text-blue-700">See details</a></td>
                        </tr>
                        <tr class="border border-yellow-500">
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">@SarahWiliams</td>
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Sumatera Utara</td>
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">1 january 2024</td>
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">
                                <p class="py-2 px-2 rounded-md text-sm bg-green-300 text-black text-center">Completed
                                </p>
                            </td>
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left"><a href="payment-for-operator-detaill.html"
                                    class="underline text-blue-700">See details</a></td>
                        </tr>
                        <tr class="border border-yellow-500">
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">@EmmaW</td>
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Sumatera Utara</td>
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">1 january 2024</td>
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">
                                <p class="py-2 px-2 rounded-md text-sm bg-green-300 text-black text-center">Completed
                                </p>
                            </td>
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left"><a href="payment-for-operator-detaill.html"
                                    class="underline text-blue-700">See details</a></td>
                        </tr>
                        <tr class="border border-yellow-500">
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">@KatteWil</td>
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Sumatera Utara</td>
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">1 january 2024</td>
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">
                                <p class="py-2 px-2 rounded-md text-sm bg-green-300 text-black text-center">Completed
                                </p>
                            </td>
                            <td class="lg:px-10 lg:py-3 px-3 py-1 text-left"><a href="payment-for-operator-detaill.html"
                                    class="underline text-blue-700">See details</a></td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex justify-between gap-3 md:items-center md:flex-row flex-col mt-6">
                    <div>
                        <label for="role">Rows per page</label>
                        <select class="py-2 px-3 bg-yellow-100 text-black rounded-md" name="role" id="role">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="flex gap-2 flex-row items-center">
                        <span class="py-2 px-4 bg-yellow-100 rounded-md text-black">
                            < </span>
                                <span class="py-2 px-4 bg-yellow-100 rounded-md text-black"> 1 </span>
                                <span>/ 1</span>
                                <span class="py-2 px-4 bg-yellow-100 rounded-md text-black"> > </span>
                    </div>
                </div>
            </div>
            {{-- <div class="flex justify-center gap-16 items-center md:flex-row">
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

            </div> --}}

        </div>
    </div>

    @include('partials/footer')
</body>

</html>