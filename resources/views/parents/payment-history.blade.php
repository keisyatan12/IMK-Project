@extends('parents.layout.main-parent')

@section('content')

<div class="flex gap-6 lg:gap-14 flex-row relative">

    <!-- CONTENT -->
    <div class="my-4 px-4 w-full mr-10 lg:mr-20 overflow-auto">

        <div class="flex flex-col gap-4 py-3">
            <div class="bg-yellow-100 w-1/2 mx-auto py-3 flex justify-center gap-4 rounded-lg">
                <span>
                    <a href="parentspayment" class="font-semibold p-3">Pembayaran</a>
                </span>
                <span>
                    <a href="#" class="underline font-semibold p-3">Cek Status Pembayaran</a>
                </span>
                <span>
                    <a href="#" class="font-semibold p-3">Riwayat Pembayaran</a>
                </span>
            </div>

            <div class="w-1/2 mx-auto  px-3 py-4 bg-yellow-100 rounded-lg">
                <div class="mx-auto w-full px-2">
                    <div class="font-bold text-center py-2 bg-green-300 rounded-lg">Transaksi Berhasil</div>
                </div>
                <div class="content mt-6 flex gap-4 px-2 py-3">
                    <img src="{{ asset('images/tutor.jpeg') }}" class="rounded-full" width="120" alt="" srcset="">
                    <div class="flex flex-col justify-between">
                        <div class="heading">
                            <h3 class="text-blue-600 font-bold">INV-*****</h3>
                            <small class="font-bold">BIMBEL PRIVATE</small>
                        </div>
                        <p>Bimbel Private 2024/2025</p>
                    </div>
                </div>
            </div>

            <div class="w-1/2 mx-auto  px-3 py-4 bg-yellow-100 rounded-lg">
                <div class="mx-auto w-full px-2">
                    <div class="font-bold text-center py-2 bg-red-300 rounded-lg">Transaksi Gagal</div>
                </div>
                <div class="content mt-6 flex gap-4 px-2 py-3">
                    <img src="{{ asset('images/tutor.jpeg') }}" class="rounded-full" width="120" alt="" srcset="">
                    <div class="flex flex-col justify-between">
                        <div class="heading">
                            <h3 class="text-blue-600 font-bold">INV-*****</h3>
                            <small class="font-bold">BIMBEL PRIVATE</small>
                        </div>
                        <p>Bimbel Private 2024/2025</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
