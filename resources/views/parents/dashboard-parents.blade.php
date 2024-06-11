@extends('parents.layout.main-parent')

@section('title', 'Parent - Dashboard') 

@section('content')

    <div class=" overflow-hidden">
        <div class="flex flex-col-reverse md:flex-row justify-end">
            <div class="flex flex-col gap-2 text-center md:text-left md:mx-auto mt-10 md:mt-40">
                <h1 class="text-4xl lg:text-7xl font-bold">Selamat Datang</h1>
                <p class="font-bold text-2xl mt-4">Kami di sini berperan sebagai perantara orang tua dan guru privat</p>
            </div>
            <div class="flex justify-center md:justify-end mt-10 md:mt-0">
                <img class="w-64 md:w-[446px] h-auto object-contain" src="{{ asset('images/guru.png') }}" alt="Guru" />
            </div>
        </div>
    
        <div class="text-center my-10">
            <h1 class="text-4xl font-bold">Aktivitas anda sejauh ini</h1>
        </div>
        <div class="container mx-auto p-5 rounded-lg shadow-lg">
            <div class="flex flex-col md:flex-row justify-around space-y-5 md:space-y-0 md:space-x-5">
                <div class="bg-gray-200 p-10 rounded-lg text-center flex-1 mx-3">
                    <div class="flex justify-center my-4">
                        <img src="{{ asset('images/icon-books.png') }}" alt="" class="item-center w-12 h-12">
                    </div>
                    <h2 class="text-4xl text-black">10</h2>
                    <p class="text-gray-600">Vacancies</p>
                </div>
                <div class="bg-gray-200 p-10 rounded-lg text-center flex-1 mx-3">
                    <div class="flex justify-center my-4">
                        <img src="{{ asset('images/icon-news.png') }}" alt="" class="item-center w-12 h-12">
                    </div>
                    <h2 class="text-4xl text-black">3</h2>
                    <p class="text-gray-600">Lowongan dipublikasi</p>
                </div>
                <div class="bg-gray-200 p-10 rounded-lg text-center flex-1 mx-3">
                    <div class="flex justify-center my-4">
                        <img src="{{ asset('images/icon-guru.png') }}" alt="" class="item-center w-12 h-12">
                    </div>
                    <h2 class="text-4xl text-black">2</h2>
                    <p class="text-gray-600">Tutor</p>
                </div>
            </div>
        </div>
    </div>

@endsection
    