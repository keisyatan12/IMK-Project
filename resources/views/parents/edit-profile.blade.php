@extends('parents.layout.main-parent')

@section('content')

<div class="flex gap-6 lg:gap-14 flex-row relative min-h-screen">

    <!-- CONTENT -->
    <div class="my-10 px-4 w-full mr-10 lg:mr-20 overflow-auto">
        <div class="flex justify-between gap-3 md:items-end md:flex-row flex-col">
            <div>
                {{-- <h1 class="text-xl lg:text-3xl font-bold">Orang Tua Naufal</h1> --}}
                <h5 class="font-bold">Nama</h5>
                <input type="text" class="font-bold border-2 shadow-md px-2" value="Orang Tua Naufal" name="" id="">
                <p class="text-sm lg:text-base"></p>
            </div>
        </div>

        <form action="" method="post">
            <div class="flex justify-between mt-4">
                <div class="flex flex-col w-4/6  gap-6">
                    <div class="flex">
                        <span class="w-1/2">
                            <h5 class="font-bold">Email</h5>
                            <input type="text" class="font-bold border-2 shadow-md px-2" value="snaisncaskask@gmail.com" name="" id="">
                        </span>
                        <span class="w-1/2">
                            <h5 class="font-bold">Phone</h5>
                            <input type="text" class="border-2 shadow-md px-2" value="0823112783232" name="" id="">
                        </span>
                    </div>
                    <span class="">
                        <h5 class="font-bold">Address</h5>
                        <input type="text" class="border-2 shadow-md px-2" value="Jalan Setiabudi No.99" name="" id="">
                    </span>
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
                        <input type="file" id="file-upload" class="absolute inset-0 opacity-0 w-full h-full cursor-pointer" />
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        <span class="opacity-0 absolute">Choose File</span>
                      </div>
                    {{-- <div class="w-16 h-16 bg-blue-500 rounded-full"></div> --}}
                </div>
            </div>
        </form>
    </div>

</div>

<style>
    .min-h-screen {
        min-height: 80vh; /* Mengatur tinggi minimum menjadi 100% dari tinggi viewport */
    }
</style>
<script>
    document.getElementById('file-upload').addEventListener('change', function() {
        if (this.files && this.files[0]) {
            const fileNameElement = document.getElementById('file-name');
            const uploadIcon = document.getElementById('upload-icon');

            // Mengubah teks dalam elemen span untuk menampilkan nama file
            fileNameElement.textContent = this.files[0].name;
            fileNameElement.classList.remove('opacity-0');
            fileNameElement.classList.add('text-gray-500'); // Tambahkan kelas untuk membuat teks terlihat
            fileNameElement.classList.add('relative'); // Posisi relatif agar terlihat di atas input

            // Menghilangkan ikon upload (+)
            uploadIcon.classList.add('hidden');
        }
    });
</script>


@endsection
