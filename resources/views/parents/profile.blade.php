@extends('parents.layout.main-parent')

@section('content')

<div class="flex gap-6 lg:gap-14 flex-row relative min-h-screen">

    <!-- CONTENT -->
    <div class="my-8 px-4 w-full mr-10 lg:mr-20 overflow-auto">
        <div class="flex justify-between gap-3 md:items-end md:flex-row flex-col">
            <div>
                <h1 class="text-xl lg:text-3xl font-bold">Orang Tua Naufal</h1>
                <a href="{{ route('parentsedit') }}" class="text-sm lg:text-base" style="color: blue">Edit info</a>
                <a href="{{ route('parentspassword') }}" class="text-sm lg:text-base px-9" style="color: blue">Edit Password</a>
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
                <span class="">
                    <h5 class="font-bold">Address</h5>
                    <p>Lorem ipsum dolor sit amet.</p>
                </span>
            </div>
            <div class="w-2/6">
                <img src="{{ asset('images/tutor.jpeg') }}" class="rounded-full" width="210" alt="" srcset="">
            </div>
        </div>
    </div>

</div>

<style>
    .min-h-screen {
        min-height: 70vh; /* Mengatur tinggi minimum menjadi 100% dari tinggi viewport */
    }
</style>

@endsection
