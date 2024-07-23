<?php

use App\Http\Controllers\CenterController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// admin login routes here

Route::get('/login',function(){return view('auth.loginpage');})->name('login');
Route::get('/register',function(){return view('auth.register');})->name('register');

Route::post('/loginuser',[UserController::class,'loginAdmin'])->name('loginUser');
Route::post('/registeruser',[UserController::class,'registerUser'])->name('registerUser');

//reception panel routes here

Route::resource('',PatientController::class);
Route::get('/patients/search', [PatientController::class, 'search'])->name('patient.search');
// Route::get('/patients/data', [PatientController::class, 'getData'])->name('patient.data');

//master panel route here

Route::get('/doctor_ref',[DoctorController::class,'showdocform'])->name('doc_ref_form');
Route::post('/doc_data',[DoctorController::class,'docformdata'])->name('doctor_data');

Route::get('/center_ref',[CenterController::class,'showcenterform'])->name('center_ref_form');
Route::post('/center_data',[CenterController::class,'centerformdata'])->name('center_data');

Route::resource('dept',DepartmentController::class);
Route::get('/search/dept',[DepartmentController::class,'search'])->name('dept.search');
// Route::get('/test/data', [TestController::class, 'getData'])->name('test.data');


Route::resource('subdept',SubController::class);
Route::get('/search/sub', [SubController::class, 'search'])->name('sub.search');

Route::resource('test',TestController::class);
Route::get('/search/test', [TestController::class, 'search'])->name('test.search');
Route::get('/test_rate',[TestController::class,'rateview'])->name('rate');
Route::get('/help_value',[TestController::class,'helpvalueview'])->name('help_value');


Route::resource('parameter',ParameterController::class);
// Route::get('/search/testpara',[ParameterController::class,'testpara'])->name('testpara.search');
// Route::get('/search/para',[ParameterController::class,'search'])->name('para.search');
Route::get('/search/parameter', [ParameterController::class, 'search'])->name('search.tests');


// search panel route here
Route::get('/search1',function(){return view('searchpanel.dailycollection');})->name('search1');
Route::get('/search2',function(){return view('searchpanel.patientcollection');})->name('search2');
Route::get('/search3',function(){return view('searchpanel.patient');})->name('search3');
Route::get('/search4',function(){return view('searchpanel.dailycollection');})->name('search4');
Route::get('/search5',function(){return view('searchpanel.dailycollection');})->name('search5');
Route::get('/search6',function(){return view('searchpanel.dailycollection');})->name('search6');
Route::get('/search7',function(){return view('searchpanel.dailycollection');})->name('search7');
Route::get('/search8',function(){return view('searchpanel.dailycollection');})->name('search8');