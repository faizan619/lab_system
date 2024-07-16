<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('page.reception.patient_registration');
// })->name('home');

Route::get('/login',function(){
    return view('page.loginpage');
})->name('login');

Route::post('/loginuser',[UserController::class,'loginAdmin'])->name('loginUser');

Route::resource('',PatientController::class);