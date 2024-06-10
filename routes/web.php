<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('landingpage');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//naufal
Route::get('/parentspayment', function () {
    return view('parents/payment');
});
Route::get('/paymenthistory', function () {
    return view('parents/payment-history');
});
Route::get('/parentsprofile', function () {
    return view('parents/profile');
});
Route::get('/parentsedit', function () {
    return view('parents/edit-profile');
});
Route::get('/parentspassword', function () {
    return view('parents/edit-password');
});
Route::get('/jobseekerprofile', function () {
    return view('Job-Seeker/profile');
});
Route::get('/jobseekeredit', function () {
    return view('Job-Seeker/edit-profile');
});
Route::get('/jobseekerpassword', function () {
    return view('JobSeeker/edit-password');
});

