@extends('tutor.layout.maintutor')
@section('title','Tutor - Dasbor')

@section('content')
<div class="w-full my-4 mr-10 lg:mr-20 overflow-auto flex flex-col">
    <div class="flex flex-col md:flex-row justify-center gap-8 md:gap-16 items-center">
        <div class="flex flex-col gap-2 text-center md:text-left">
            <h1 class="text-2xl md:text-4xl font-bold">Selamat Datang Rekan Tutor</h1>
            <h1 class="text-2xl md:text-4xl font-bold">John Doe</h1>
            <p class="text-sm md:text-base mt-4 font-bold">Kami di sini berperan sebagai perantara orang tua dan
                guru privat
            </p>
        </div>
        <div class="flex justify-center md:justify-start">
            <img class="w-64 md:w-[500px]" src="{{ ('images/tutor.png') }}" alt="" />
        </div>
    </div>
    <div class="flex justify-center items-center gap-3 py-3">
        <div
            class="flex flex-col md:flex-row items-center justify-center gap-8 md:gap-36 w-full md:w-[1211px] h-auto bg-[#FFFDF0] border-2 border-[#00BFFF] rounded-[42px] py-4 px-4">
            <div
                class="flex flex-col items-center w-[120px] md:w-[184px] h-auto bg-[#FFDC5F] border border-[#F5C400] shadow-[7px_7px_30px_rgba(0,0,0,0.25)] rounded-[14px] p-4">
                <img src="{{('images/teacher.png')}}" alt="teacher" class="w-auto h-[80px] md:h-[100px] object-contain">
                <p class="text-center text-black text-xl md:text-2xl font-bold">123</p>
                <p class="mt-2 text-black text-center font-sans font-bold">Teacher</p>
            </div>
            <div
                class="flex flex-col items-center w-[120px] md:w-[184px] h-auto bg-[#FFDC5F] border border-[#F5C400] shadow-[7px_7px_30px_rgba(0,0,0,0.25)] rounded-[14px] p-4">
                <img src="{{('images/books.png')}}" alt="books" class="w-auto h-[80px] md:h-[100px] object-contain">
                <p class="text-center text-black text-xl md:text-2xl font-bold">123</p>
                <p class="mt-2 text-black text-center font-sans font-bold">Books</p>
            </div>
            <div
                class="flex flex-col items-center w-[120px] md:w-[184px] h-auto bg-[#FFDC5F] border border-[#F5C400] shadow-[7px_7px_30px_rgba(0,0,0,0.25)] rounded-[14px] p-4">
                <img src="{{('images/reading.png')}}" alt="reading" class="w-auto h-[80px] md:h-[100px] object-contain">
                <p class="text-center text-black text-xl md:text-2xl font-bold">123</p>
                <p class="mt-2 text-black text-center font-sans font-bold">Siswa</p>
            </div>
        </div>
    </div>
</div>
@endsection