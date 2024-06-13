@extends('JobSeeker.layout.main-jobseeker')

@section('title', 'Jobseeker - Profil') 

@section('content')

<div class="my-4 px-4 w-full mr-10 lg:mr-20 overflow-auto">
    <div class="flex justify-between gap-3 md:items-end md:flex-row flex-col">
        <div>
            <h1 class="text-xl lg:text-3xl font-bold">Naufal Fauzan Nst</h1>
            <p class="text-sm text-blue-600 lg:text-base">Edit info</p>
        </div>
    </div>

    <div class="flex justify-between mt-4">
        <div class="flex flex-col w-4/6  gap-6">
            <div class="flex">
                <span class="w-1/2">
                    <h5 class="font-bold">Emaihl</h5>
                    <p>saijdiajd@mail.com</p>
                </span>
                <span class="w-1/2">
                    <h5 class="font-bold">Phone</h5>
                    <p>123123123123</p>
                </span>
            </div>
            <div class="flex">
                <span class="w-1/2">
                    <h5 class="font-bold">Location</h5>
                    <p>Indonesia</p>
                </span>
                <span class="w-1/2">
                    <h5 class="font-bold">Age, Gender</h5>
                    <p>20, Male</p>
                </span>
            </div>
            <div class="flex">
                <span class="w-1/2">
                    <h5 class="font-bold">Last Education</h5>
                    <p>S1 Teknologi Informasi</p>
                </span>
                <span class="w-1/2">
                    <h5 class="font-bold">Work Experience</h5>
                    <p>BUMN</p>
                </span>
            </div>
            <div class="flex gap-4">
                <span>Resume :</span>
                <div class="border shadow-md rounded-lg">
                    <div class="p-2">
                        <img src="{{ asset('images/image-13.png') }}" alt="">
                    </div>
                    <div class="w-100 bg-blue-500 px-3">
                        <span class="font-semibold">Resume</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-2/6">
            <img src="{{ asset('images/tutor.jpeg') }}" class="rounded-full" width="210" alt="" srcset="">
        </div>
    </div>
</div>

@endsection