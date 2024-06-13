@extends('superadmin.layout.main-superadmin')

@section('title', 'Superadmin - Tutor Criteria') 

@section('content')

<div class="my-4 w-full mr-10 md:mr-20">
    <div class="flex justify-between items-end">
        <div>
            <h1 class="text-xl lg:text-3xl font-bold">Tutor Management</h1>
            <p class="text-sm lg:text-base">You can manage all section related to private tutor here</p>

            <h2 class="mt-6 text-lg lg:text-xl font-semibold">Tutor Criteria Inbox Detail</h2>
        </div>
    </div>
    
    <div class="flex flex-col gap-3 mt-3">
        <div class="flex justify-between items-center">
            <p>From parents</p>
            <div class="flex items-center gap-2">
                <span> : </span>
                <input type="text" class="py-1 text-black px-4 rounded-md border border-yellow-500 w-40 md:w-56 lg:w-[440px] block" value="abcdefg"></input>
            </div>
        </div>
          <div class="flex justify-between items-center">
            <p>Student level</p>
            <div class="flex items-center gap-2">
                <span> : </span>
                <input type="text" value="SMP" class="py-1 px-4 rounded-md border border-yellow-500 w-40 md:w-56 text-black lg:w-[440px] block"></input>
            </div>
        </div>
          <div class="flex justify-between items-center">
            <p>Student class</p>
            <div class="flex items-center gap-2">
                <span> : </span>
                <input type="number" value="3" class="py-1 px-4 rounded-md border border-yellow-500 text-black w-40 md:w-56 lg:w-[440px] block"></input>
            </div>
        </div>
          <div class="flex justify-between items-center">
            <p>Student school</p>
            <div class="flex items-center gap-2">
                <span> : </span>
                <input type="text" value="SMP Harapan Mulia" class="py-1 px-4 rounded-md border text-black border-yellow-500 w-40 md:w-56 lg:w-[440px] block"></input>
            </div>
        </div>
          <div class="flex justify-between items-center">
            <p>Subject need to be teach</p>
            <div class="flex items-center gap-2">
                <span> : </span>
                <input type="text" value="Physics" class="py-1 px-4 rounded-md border text-black border-yellow-500 w-40 md:w-56 lg:w-[440px] block"></input>
            </div>
        </div>
          <div class="flex justify-between items-center">
            <p>Day</p>
            <div class="flex items-center gap-2">
                <span> : </span>
                <input type="text" value="Thursday" class="py-1 px-4 rounded-md text-black border border-yellow-500 w-40 md:w-56 lg:w-[440px] block"></input>
            </div>
        </div>
          <div class="flex justify-between items-center">
            <p>Time</p>
            <div class="flex items-center gap-2">
                <span> : </span>
                <input type="text" value="09.00 - 12.00" class="py-1 text-black px-4 rounded-md border border-yellow-500 w-40 md:w-56 lg:w-[440px] block"></input>
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
        <div class="mt-6 mb-4 flex flex-row justify-end gap-3">
            <button class="py-2 px-4 rounded-md border border-blue-700">Decline</button>
            <button class="py-2 px-4 rounded-md bg-blue-700 text-white">Accept</button>
        </div>
    </div>

</div>

@endsection
    