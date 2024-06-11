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

Route::get('/landingpage', function () {
    return view('landingpage');
});

Route::get('/jobdashboard', function () {
    return view('/JobSeeker/jobseeker-dashboard');
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
    return view('parents.payment');
});
Route::get('/paymenthistory', function () {
    return view('parents.payment-history');
});
Route::get('/parentsprofile', function () {
    return view('parents.profile');
});
Route::get('/parentsedit', function () {
    return view('parents.edit-profile');
});
Route::get('/parentspassword', function () {
    return view('parents.edit-password');
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

// Parents

Route::get('/dashboard-parents', function () {
    return view('/parents/dashboard-parents');
});
Route::get('/tutor-applicants-parents', function () {
    return view('/parents/tutor-applicants-parent');
});
Route::get('/find-tutor-parent', function () {
    return view('/parents/find-tutor-parent');
});
Route::get('/tutor-review-parent', function () {
    return view('/parents/tutor-review-parent');
});
Route::get('/tutor-review-parent-tambahlowongan', function () {
    return view('/parents/find-tutor-parent-form');
});

//operator
Route::get('/operator-tutor-review', function () {
    return view('/operator/operator-tutor-review');
});

Route::get('/operator-tutor-review-detail', function () {
    return view('/operator/operator-tutor-review-detail');
});

Route::get('/operator-tutor-status', function () {
    return view('/operator/operator-tutor-status');
});

Route::get('/operator-tutor-status-detail', function () {
    return view('/operator/operator-tutor-status-detail');
});

Route::get('/operator-tutor-criteria-inbox', function () {
    return view('/operator/operator-tutor-criteria-inbox');
});

Route::get('/operator-tutor-criteria-inbox-detail', function () {
    return view('/operator/operator-tutor-criteria-inbox-detail');
});

Route::get('/operator-payment-history', function () {
    return view('/operator/operator-payment-history');
});

Route::get('/operator-payment', function () {
    return view('/operator/operator-payment');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/audit', function () {
    return view('/superadmin/audit-logs');
});

Route::get('/superadmin-dashboard', function () {
    return view('/superadmin/dashboard');
});

Route::get('/paymentparent', function () {
    return view('/superadmin/payment-from-parent');
});

Route::get('/paymentoperator', function () {
    return view('/superadmin/payment-for-operator');
});

Route::get('/paymentoperatorhistory', function () {
    return view('/superadmin/payment-for-operator-history');
});

Route::get('/paymentoperatordetail', function () {
    return view('/superadmin/payment-for-operator-detail');
});

Route::get('/tutorlist', function () {
    return view('/superadmin/tutor-list');
});

Route::get('/tutorlistdetail', function () {
    return view('/superadmin/tutor-list-detail');
});

Route::get('/tutorreview', function () {
    return view('/superadmin/tutor-review');
});

Route::get('/tutorreviewdetail', function () {
    return view('/superadmin/tutor-review-detail');
});

Route::get('/tutorcriteriainbox', function () {
    return view('/superadmin/tutor-criteria-inbox');
});

Route::get('/tutorcriteriainboxdetail', function () {
    return view('/superadmin/tutor-criteria-inbox-detail');
});

Route::get('/tutordashboard', function () {
    return view('/tutor/tutor-dashboard');
});

Route::get('/tutorschedule', function () {
    return view('/tutor/tutor-schedule');
});

Route::get('/tutorpayment', function () {
    return view('/tutor/tutor-payment');
});

Route::get('/tutorprofile', function () {
    return view('/tutor/tutor-profile');
});

Route::get('/tutorprofileedit', function () {
    return view('/tutor/tutor-profile-edit');
});






require __DIR__ . '/auth.php';

