<?php

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
