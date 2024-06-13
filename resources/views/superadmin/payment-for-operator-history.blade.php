<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react@1.0.5/dist/index.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/css/output.css')
    <title>Superadmin - Payment for Operator History</title>
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
            <a href="audit-logs.html" class="flex items-center gap-3 px-4 py-2">
                <img src="{{ ('images/image-6.svg') }}" alt="user management" />
                <span class="text-black text-base hidden md:block">Audit logs</span>
            </a>
            <div>
                <a href="payment-for-operator.html" class="flex items-center bg-yellow-300 rounded-md gap-3 px-4 py-2">
                    <img src="{{ ('images/image-5.svg') }}" alt="home" />
                    <span class="text-black text-base hidden md:block">Payment</span>
                </a>
                <ul class="ml-2 md:ml-14 py-3 flex flex-col gap-1 text-black">
                    <li class="py-2 px-4 bg-yellow-400 rounded-md">
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
        
    </div>

@include('partials/footer')
</body>
</html>

@extends('superadmin.layout.main-superadmin')

@section('title', 'Superadmin - Payment Operator History') 

@section('content')

<div class="my-4 w-full mr-10 lg:mr-20">
    <div class="flex justify-between items-end">
        <div>
            <h1 class="text-xl lg:text-3xl font-bold">Payment</h1>
            <p class="text-sm lg:text-base">You can check all payment status here</p>

            <h2 class="mt-6 text-lg lg:text-xl font-semibold">Payment history</h2>
        </div>
       
    </div>
    
    <div class="flex flex-col gap-3 mt-3">
        <div class="flex justify-between items-center">
            <p>Payment date</p>
            <div class="flex items-center gap-2">
                <span> : </span>
                <input type="text" class="py-1 px-4 rounded-md border border-yellow-500 text-black w-40 md:w-56 lg:w-[440px] block" value="abcdefg"></input>
            </div>
        </div>
          <div class="flex justify-between items-center">
            <p>Paid to</p>
            <div class="flex items-center gap-2">
                <span> : </span>
                <input type="text" value="abcdefg" class="py-1 px-4 rounded-md text-black border border-yellow-500 w-40 md:w-56 lg:w-[440px] block"></input>
            </div>
        </div>
          <div class="flex justify-between items-center">
            <p>Province</p>
            <div class="flex items-center gap-2">
                <span> : </span>
                <input type="text" value="abcdefg" class="py-1 px-4 text-black rounded-md border border-yellow-500 w-40 md:w-56 lg:w-[440px] block"></input>
            </div>
        </div>
          <div class="flex justify-between items-center">
            <p>Status</p>
            <div class="flex items-center gap-2">
                <span> : </span>
                <input type="text" value="Unpaid" class="py-1 text-black px-4 rounded-md border border-yellow-500 w-40 md:w-56 lg:w-[440px] block"></input>
            </div>
        </div>
        <div class="flex justify-between items-center">
            <p>Proof</p>
            <div class="flex items-center gap-2">
                <span> : </span>
                <div class="w-40 md:w-56 lg:w-[440px]">
                    <div class="flex justify-center items-center flex-col border border-yellow-500 rounded-md">
                        <img src="{{ ('images/image-13.png') }}" alt="pdf" class="w-20 py-10"/>
                        <button class="bg-yellow-500 text-black py-2 w-full">Download PDF</button>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="flex items-center gap-3 mt-12">
        <a href='payment-for-operator-detaill.html' class="py-2 px-4 rounded-md border border-blue-700 text-blue-700">Back</a>
    </div>

</div>

@endsection
    