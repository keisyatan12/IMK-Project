@extends('parents.layout.main-parent')

@section('title', 'Cari Tutor') 

@section('content')


<div class="flex flex-col p-4">
    <div class=" mb-8">
        <h1 class="text-xl lg:text-3xl font-bold">Find Tutor</h1>
        <p class="text-sm lg:text-base">Cari tutor dengan kriteria yang anda inginkan dengan menekan tombol tambah di bawah</p>
    </div>
    <div class="flex flex-wrap gap-4 justify-center md:flex">
        <div class="max-w-sm w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex-shrink-0 rounded overflow-hidden shadow-lg">
          <img class="w-full" src="images/matematika.jpg" alt="Matematika">
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Matematika</div>
            <p class=" text-base">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
            </p>
          </div>
          <div class="flex justify-end px-6 pt-4 pb-2">
            <span class="inline-block bg-green-500 rounded-full px-3 py-1 text-sm font-bold text-white mr-2 mb-2 justify-end">Diterima</span>
          </div>
        </div>
      
        <div class="max-w-sm w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex-shrink-0 rounded overflow-hidden shadow-lg">
          <img class="w-full" src="images/matematika.jpg" alt="Matematika">
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Filsafat</div>
            <p class=" text-base">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
            </p>
          </div>
          <div class="flex justify-end px-6 pt-4 pb-2">
            <span class="inline-block bg-red-600 rounded-full px-3 py-1 text-sm font-bold text-black mr-2 mb-2">Ditolak</span>
            <button class="inline-block bg-black rounded-full px-3 py-1 text-sm font-bold text-white mr-2 mb-2">Hapus</button>
          </div>
        </div>
    
        <div class="max-w-sm w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex-shrink-0 rounded overflow-hidden shadow-lg">
            <img class="w-full" src="images/matematika.jpg" alt="Matematika">
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2">Fisika Kuantum</div>
              <p class=" text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
              </p>
            </div>
            <div class="flex justify-end px-6 pt-4 pb-2">
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Menunggu Persetujuan</span>
            </div>
          </div>
          <div class="max-w-sm w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex-shrink-0 rounded overflow-hidden shadow-lg">
            <img class="w-full" src="images/matematika.jpg" alt="Matematika">
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2">Propaganda</div>
              <p class=" text-base">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
              </p>
            </div>
            <div class=" flex justify-end px-6 pt-4 pb-2">
                <span class="inline-block bg-red-600 rounded-full px-3 py-1 text-sm font-bold text-black mr-2 mb-2">Ditolak</span>
                <button class="inline-block bg-black rounded-full px-3 py-1 text-sm font-bold text-white mr-2 mb-2">Hapus</button>
            </div>
          </div>
          
          <div class="max-w-sm w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex-shrink-0 rounded overflow-hidden content-center">
            <div class="w-full flex content-center justify-center">
                <a href="tutor-review-parent-tambahlowongan">
                    <button class=" rounded-full p-2 mt-5 mb-4 transition duration-500 ease-in-out hover:bg-yellow-400 transform hover:-translate-y-1 hover:scale-110">
                      <img src="images/tombol_tambah_cari_tutor.png" alt="Tambah" class="w-20 h-20">
                    </button>
                </a>
            </div>
          </div>
    </div>
</div>




@endsection