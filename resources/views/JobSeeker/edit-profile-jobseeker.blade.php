@extends('JobSeeker.layout.main-jobseeker')

@section('title', 'Jobseeker - Edit Profil') 

@section('content')

<div class="my-4 px-4 w-full mr-10 lg:mr-20 overflow-auto">
    <div class="flex justify-between gap-3 md:items-end md:flex-row flex-col">
        <div>
            <h3 class="font-bold">Name :</h3>
            <input type="text" class="font-bold border-2 shadow-md px-2" value="Naufal Fauzan Nst" name="" id="">

            <p class="text-sm text-blue-600 lg:text-base">Edit info</p>
        </div>
    </div>

    <div class="flex justify-between mt-4">
        <div class="flex flex-col w-4/6  gap-6">
            <div class="flex">
                <span class="w-1/2">
                    <h5 class="font-bold">Emaihl</h5>
                    <input type="text" class="font-bold border-2 shadow-md px-2" value="snaisncaskask@gmail.com" name="" id="">
                </span>
                <span class="w-1/2">
                    <h5 class="font-bold">Phone</h5>
                    <input type="text" class="border-2 shadow-md px-2" value="Jalan Setiabudi No.99" name="" id="">
                </span>
            </div>
            <div class="flex">
                <span class="w-1/2">
                    <h5 class="font-bold">Location</h5>
                    <input type="text" class="border-2 shadow-md px-2" value="Jalan Setiabudi No.99" name="" id="">
                </span>
                <span class="w-1/2">
                    <h5 class="font-bold">Age, Gender</h5>
                    <input type="text" class="border-2 shadow-md px-2" value="Jalan Setiabudi No.99" name="" id="">
                </span>
            </div>
            <div class="flex">
                <span class="w-1/2">
                    <h5 class="font-bold">Last Education</h5>
                    <input type="text" class="border-2 shadow-md px-2" value="Jalan Setiabudi No.99" name="" id="">
                </span>
                <span class="w-1/2">
                    <h5 class="font-bold">Work Experience</h5>
                    <input type="text" class="border-2 shadow-md px-2" value="Jalan Setiabudi No.99" name="" id="">
                </span>
            </div>
            <div class="flex gap-4">
                <span>Resume :</span>
                <div class="border shadow-md rounded-lg">
                    <div class="p-2">
                        <img src="{{ asset('images/image-5.svg') }}" alt="">
                    </div>
                    <div class="w-100 bg-blue-500 px-3">
                        <span class="font-semibold">Edit</span>
                    </div>
                </div>
            </div>
            <div class="mt-16 p-4 flex justify-end gap-3">
                <div class="">
                    <button class="border-2 bg-white font-semibold px-4 py-1 rounded-lg">Cancel</button>
                </div>
                <div class="">
                    <button class="bg-blue-500 text-white font-semibold px-4 py-1 rounded-md">Submit</button>
                </div>
            </div>
        </div>
        <div class="w-2/6">
            <div class="relative w-36 h-36 rounded-full overflow-hidden bg-gray-200 flex items-center justify-center cursor-pointer">
                <input type="file" class="absolute inset-0 opacity-0 w-full h-full cursor-pointer" />
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                <span class="opacity-0 absolute">Choose File</span>
              </div>
            {{-- <div class="w-16 h-16 bg-blue-500 rounded-full"></div> --}}
            {{-- <img src="{{ asset('images/tutor.jpeg') }}" class="rounded-full" width="210" alt="" srcset=""> --}}
        </div>
    </div>
</div>

@endsection
