@extends('parents.layout.main-parent')

@section('content')

<div class="flex flex-col items-center my-10 px-4">
    <!-- Header -->
    <div class="w-full flex justify-between items-center mb-6">
        <div class="w-full">
            <h5 class="font-bold mb-2">Nama</h5>
            <input type="text" class="w-full font-bold border-2 shadow-md px-2 py-1" value="Orang Tua Naufal" name="" id="">
        </div>
    </div>

    <!-- Form -->
    <form class="w-full">
        <div class="flex flex-wrap justify-between mt-4">
            <div class="w-full lg:w-4/6 flex flex-col gap-6">
                <div class="flex flex-wrap gap-3">
                    <span class="w-full lg:w-1/2">
                        <h5 class="font-bold mb-2">Email</h5>
                        <input type="text" class="w-full font-bold border-2 shadow-md px-2 py-1" value="naufalfauzanst@gmail.com" name="" id="">
                    </span>
                    <span class="w-full lg:w-1/2">
                        <h5 class="font-bold mb-2">Phone</h5>
                        <input type="text" class="w-full border-2 shadow-md px-2 py-1" value="085261027728" name="" id="">
                    </span>
                </div>
                <span class="w-full">
                    <h5 class="font-bold mb-2">Address</h5>
                    <input type="text" class="w-full border-2 shadow-md px-2 py-1" value="Jalan Setiabudi No. 99" name="" id="">
                </span>
            </div>
            <div class="w-full lg:w-1/3 flex justify-center lg:justify-end mt-6 lg:mt-0">
                <div class="relative w-36 h-36 rounded-full overflow-hidden bg-gray-200 flex items-center justify-center cursor-pointer">
                    <input type="file" class="absolute inset-0 opacity-0 w-full h-full cursor-pointer" />
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="flex justify-end mt-6 gap-3">
            <button class="border-2 bg-white font-semibold px-4 py-1 rounded-lg">Cancel</button>
            <button class="bg-blue-500 text-white font-semibold px-4 py-1 rounded-md">Submit</button>
        </div>
    </form>
</div>

@endsection
    
