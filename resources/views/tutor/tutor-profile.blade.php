@extends('tutor.layout.maintutor')
@section('title','Tutor - Profil')
@section('content')
<div class="w-full my-4 mr-10 lg:mr-20 flex flex-col">
    <div class="my-4 w-full mr-10 md:mr-20">
        <div class="flex justify-center md:items-end flex-col md:flex-row">
            <h1 class="text-xl lg:text-3xl font-bold">Profil</h1>
        </div>
    </div>
    <div class="flex justify-end mt-0 mb-4">
        <a href="/tutorprofileedit"
            class="relative shadow-md shadow-slate-600 w-[181px] h-[41px] bg-gray-300 hover:bg-gray-500 hover:shadow-none rounded-lg flex items-center justify-center">
            <img src="{{('images/editing.png')}}" alt="edit" class="absolute left-2 w-7 h-7 ml-3">
            <span class="text-black font-semibold text-lg ml-8">Ubah Profil</span>
        </a>
    </div>
    <div class="flex flex-col items-center">
        <div class="flex items-center justify-center w-[212px] h-[212px] rounded-full overflow-hidden">
            <img src="{{('images/profiluser.jpg')}}" alt="Profile Picture" class="w-full h-full object-cover">
        </div>
    </div>
    <div class="flex mt-9 w-full">
        <div class="flex flex-col gap-4 text-lg font-sans min-w-64">
            <p>Nama</p>
            <p>Tanggal Lahir</p>
            <p>Nomor Telepon</p>
            <p>Email</p>
            <p>Domisili</p>
            <p>Pendidikan Terakhir</p>
        </div>
        <div class="flex flex-col gap-4 mr-5 text-lg font-sans">
            <p>:</p>
            <p>:</p>
            <p>:</p>
            <p>:</p>
            <p>:</p>
            <p>:</p>
        </div>
        <div class="flex flex-col gap-4 mr-5 text-lg font-sans">
            <p>John Doe</p>
            <p>9 November 2001</p>
            <p>081234567890</p>
            <p>johndoe911@gmail.com</p>
            <p>Balige</p>
            <p>Taman Kanak-kanak</p>
        </div>
    </div>
    <div class="flex mt-9">
        <p class="font-bold text-2xl">Curriculum Vitae</p>
    </div>
    <div class="flex mt-3 w-full">
        <div class="flex flex-col gap-4 text-lg font-sans min-w-64">
            <p>Tingkat Pendidikan</p>
            <p>Sekolah/Almamater</p>
            <p>Lulus</p>
            <p>Curriculum Vitae</p>
            <p>Pengalaman Organisasi</p>
        </div>
        <div class="flex flex-col gap-4 mr-5 text-lg font-sans">
            <p>:</p>
            <p>:</p>
            <p>:</p>
            <p>:</p>
            <p>:</p>
        </div>
        <div class="flex flex-col gap-4 mr-5 text-lg font-sans">
            <p>Bachelor of Mobile Gaming</p>
            <p>Institut Teknologi Balige</p>
            <p>2001 - 2003</p>
            <button
                class="relative w-[181px] h-[30px] bg-[#65ADC5] hover:bg-[#34829c] hover:shadow-none shadow-md shadow-[#34829c] text-black hover:text-white rounded-full flex items-center justify-center">
                <span class="font-semibold text-lg ">Buka Disini</span>
            </button>
            <p>Menjadi Nahkoda di OPM</p>
        </div>
    </div>
</div>

@endsection