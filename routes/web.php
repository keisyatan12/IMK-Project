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

//operator//
Route::get('/tutorstatusoperator', function () {
    return view('/operator/tutor-status');
});

Route::get('/tutorstatusdetailoperator', function () {
    return view('/operator/tutor-status-detail');
});

Route::get('/tutorcriteriainboxoperator', function () {
    return view('/operator/tutor-criteria-inbox');
});

Route::get('/tutorcriteriainboxdetailoperator', function () {
    return view('/operator/tutor-criteria-inbox-detail');
});

Route::get('/tutorreviewoperator', function () {
    return view('/operator/tutor-review');
});

Route::get('/tutorreviewdetailoperator', function () {
    return view('/operator/tutor-review-detail');
});

Route::get('/paymenthistoryoperator', function () {
    return view('/operator/payment-history');
});

Route::get('/paymentoperatoroperator', function () {
    return view('/operator/payment-operator');
});

