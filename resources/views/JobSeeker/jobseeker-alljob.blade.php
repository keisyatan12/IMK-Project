@extends('JobSeeker.layout.main-jobseeker')

@section('title', 'Jobseeker - All Job') 

@section('content')


<div class="flex flex-col items-center p-4">
    <div class="mb-8 text-center">
        <h1 class="text-2xl lg:text-3xl font-bold">Find Tutor</h1>
        <p class="text-sm lg:text-base mt-2">Cari tutor dengan kriteria yang anda inginkan dengan menekan tombol tambah di bawah</p>
    </div>
    
    <!-- Search Bar -->
    <div class="w-full max-w-lg mb-8">
        <div class="relative flex items-center w-full h-12 rounded-full shadow-lg bg-white overflow-hidden">
            <input class="peer h-full w-full outline-none text-sm text-gray-700 pl-4 bg-transparent" type="text" placeholder="Search..."/>
            <div class="grid place-items-center h-full w-12 text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4v16m8-8H4" />
                </svg>
            </div>
            <button type="button" class="grid place-items-center h-full px-4 bg-blue-500 text-white hover:bg-blue-600 transition-colors duration-300 focus:outline-none">
                Search
            </button>
        </div>
    </div>

    <!-- Tutor Cards -->
    <div class="flex flex-wrap gap-4 justify-center">
        <div class="max-w-sm w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex-shrink-0 rounded overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="images/matematika.jpg" alt="Matematika">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Matematic for 3 SMP</div>
                <span>
                    <p class="text-sm">09.00 - 12.00</p>
                    <p class="text-sm">Rp. 750.000,00-/Month</p>
                </span>
            </div>
            <div class="flex justify-end px-6 pt-4 pb-2">
                <button class="px-4 py-2 rounded-lg bg-cyan-500 text-white shadow-md mr-4">Apply Job</button>
                <button class="px-4 py-2 rounded-lg bg-white shadow-md">Detail Job</button>
            </div>
        </div>

        <!-- Add more cards as needed -->
        <div class="max-w-sm w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex-shrink-0 rounded overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="images/matematika.jpg" alt="Matematika">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Matematic for 3 SMP</div>
                <span>
                    <p class="text-sm">09.00 - 12.00</p>
                    <p class="text-sm">Rp. 750.000,00-/Month</p>
                </span>
            </div>
            <div class="flex justify-end px-6 pt-4 pb-2">
                <button class="px-4 py-2 rounded-lg bg-cyan-500 text-white shadow-md mr-4">Apply Job</button>
                <button class="px-4 py-2 rounded-lg bg-white shadow-md">Detail Job</button>
            </div>
        </div>

        <div class="max-w-sm w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex-shrink-0 rounded overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="images/matematika.jpg" alt="Matematika">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Matematic for 3 SMP</div>
                <span>
                    <p class="text-sm">09.00 - 12.00</p>
                    <p class="text-sm">Rp. 750.000,00-/Month</p>
                </span>
            </div>
            <div class="flex justify-end px-6 pt-4 pb-2">
                <button class="px-4 py-2 rounded-lg bg-cyan-500 text-white shadow-md mr-4">Apply Job</button>
                <button class="px-4 py-2 rounded-lg bg-white shadow-md">Detail Job</button>
            </div>
        </div>

        <div class="max-w-sm w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex-shrink-0 rounded overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="images/matematika.jpg" alt="Matematika">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Matematic for 3 SMP</div>
                <span>
                    <p class="text-sm">09.00 - 12.00</p>
                    <p class="text-sm">Rp. 750.000,00-/Month</p>
                </span>
            </div>
            <div class="flex justify-end px-6 pt-4 pb-2">
                <button class="px-4 py-2 rounded-lg bg-cyan-500 text-white shadow-md mr-4">Apply Job</button>
                <button class="px-4 py-2 rounded-lg bg-white shadow-md">Detail Job</button>
            </div>
        </div>
    </div>
</div>

@endsection