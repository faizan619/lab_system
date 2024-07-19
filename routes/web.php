<?php

use App\Http\Controllers\CenterController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () { return view('page.reception.patient_registration'); })->name('home');

Route::get('/login',function(){return view('auth.loginpage');})->name('login');

Route::post('/loginuser',[UserController::class,'loginAdmin'])->name('loginUser');

Route::resource('',PatientController::class);
Route::get('/patients/search', [PatientController::class, 'search'])->name('patient.search');
// Route::get('/patients/data', [PatientController::class, 'getData'])->name('patient.data');

Route::get('/doctor_ref',[DoctorController::class,'showdocform'])->name('doc_ref_form');
Route::post('/doc_data',[DoctorController::class,'docformdata'])->name('doctor_data');

Route::get('/center_ref',[CenterController::class,'showcenterform'])->name('center_ref_form');
Route::post('/center_data',[CenterController::class,'centerformdata'])->name('center_data');

Route::resource('dept',DepartmentController::class);
Route::get('/search',[DepartmentController::class,'search'])->name('dept.search');
Route::get('/test/data', [TestController::class, 'getData'])->name('test.data');


Route::resource('subdept',SubController::class);

Route::resource('test',TestController::class);
// Route::get('test/search',[TestController::class,'search'])->name('test.search');
