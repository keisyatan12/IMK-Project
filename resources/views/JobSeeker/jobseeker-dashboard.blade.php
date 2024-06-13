@extends('JobSeeker.layout.main-jobseeker')

@section('title', 'Jobseeker - Dashboard') 

@section('content')

<div class="my-4 w-full mr-10 lg:mr-20 overflow-auto min-h-screen">
    {{-- INI BODY --}}
    <div class="grid grid-cols-3 h-full">
        <div class="col-span-2 justify-center flex">
            <div class="flex flex-col gap-8">

                <span class="text-center">
                    <p class="text-3xl font-bold">SELAMAT DATANG</p>
                    <p class="text-xl font-semibold">DAPATKAN PEKERJAAN UNTUK MENJADI TUTOR YANG BERMAKNA BAGIMU</p>
                </span>
                <span>
                    <div id='job' class=" py-4 px-6 rounded-lg bg-gray-300 w-fit text-center">
                        <p>18</p>
                        <p>JOB's</p>
                    </div>
                </span>
            </div>
        </div>
        <div class="h-full">
            <img src="{{ asset("images/dashboardJS.png")}}" alt="dashboardJS " class="h-full object-fill">
        </div>
    </div>
</div>

@endsection