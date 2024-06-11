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

// Parents

Route::get('/dashboard-parents', function(){
    return view('/parents/dashboard-parents');
});
Route::get('/tutor-applicants-parents', function(){
    return view('/parents/tutor-applicants-parent');
});
Route::get('/find-tutor-parent', function(){
    return view('/parents/find-tutor-parent');
});
Route::get('/tutor-review-parent', function(){
    return view('/parents/tutor-review-parent');
});
Route::get('/tutor-review-parent-tambahlowongan', function(){
    return view('/parents/find-tutor-parent-form');
});

