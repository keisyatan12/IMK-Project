<?php

use App\Modules\JobSeeker\Controllers\JobSeekerController;
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
    return view('welcome');
});


Route::get('/jobseeker/dashboard', [JobSeekerController::class, 'index'])->name('JobSeeker.index');

Route::get('/jobseeker/alljob', [JobSeekerController::class, 'alljob'])->name('JobSeeker.alljob');

Route::get('/jobseeker/history', [JobSeekerController::class, 'history'])->name('JobSeeker.history');

Route::get('/jobseeker/profil', [JobSeekerController::class, 'profil'])->name('JobSeeker.profil');
