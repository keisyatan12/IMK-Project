<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show()
    {
        // Logika untuk menampilkan halaman pembayaran
        return view('parents.payment');
    }

    public function store(Request $request)
    {
        // Logika untuk menangani konfirmasi pembayaran
        // Validasi dan simpan data pembayaran

        // Redirect ke halaman riwayat pembayaran setelah berhasil
        return redirect()->route('paymenthistory');
    }

    public function paymentHistory()
    {
        // Logika untuk menampilkan halaman riwayat pembayaran
        return view('paymenthistory');
    }
}
