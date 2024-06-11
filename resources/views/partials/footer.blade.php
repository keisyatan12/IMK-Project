<footer class="bg-[#001840] py-8 px-8">
    <div class="container mx-auto flex flex-row gap-3 items-center">
        <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-14" />
        <span class="text-white font-bold text-xl">Private Tutor Indonesia</span>
    </div>
    <div class="flex justify-between mt-8 mx-auto container gap-6 items-start flex-col md:flex-row">
        <div>
            <h3 class="text-yellow-500 font-semibold text-2xl">Let's connect with us!</h3>
            <ul class="text-white flex flex-col gap-2 mt-3">
                <li>Adress: Gedung C Fasilkom-TI, Universitas Sumatera Utara,
                    Jl. Alumni No.3, Padang Bulan, Kota Medan, 20155</li>
                <li>Phone number: 628199209666</li>
                <li>Email: fasilkomti@usu.ac.id</li>
                <li class="flex items-center">
                    <img src="{{ asset('images/image-20.png') }}" alt="facebook" class="w-10" />
                    <img src="{{ asset('images/image-19.png') }}" alt="facebook" class="ml-8 w-10" />
                    <img src="{{ asset('images/image-17.png') }}" alt="facebook" class="w-24" />
                </li>
            </ul>
        </div>
        <div>
            <h3 class="text-yellow-500 font-semibold text-2xl">Our menu</h3>
            <ul class="text-white flex flex-col gap-2 mt-3">
                <li>Beranda</li>
                <li>Tentang kami</li>
                <li>Cari lowongan mengajar</li>
                <li>Temukan tutor les yang sesuai kriteria</li>
            </ul>
        </div>
    </div>
</footer>

<script src="{{ asset('script.js') }}"></script>