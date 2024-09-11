<?php

use App\Http\Controllers\AdminloginController;
use App\Http\Controllers\RegisterUserController;

use App\Models\RegisterUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inquiryform');
});

Route::get('/login', function () {
    return view('loginform');
});
// login post method
// Route::post('/add', [AdminloginController::class, 'add'])->name('form');

// Route::post('/add', [AdminloginController::class, 'add'])->name('form');






Route::get('/admin/updatepassword', function () {
    return view('createNewPassword');
});


Route::get('/admin', function () {
    return view('admin');
});

// after submit the form then naviagte this route
Route::get('/successSubmit', function () {
    return view('successSubmitForm');
});



// ----------------Routes of User Inquiry----------
// Route::post('/register',[RegisterUserController::class,'registerUserInquiry']); 


// Route::post('/regi','auth.regi')->name('regi');
Route::post('/register',[RegisterUserController::class,'register'])->name('regi');





//below code correct post  request work
Route::get('/add', function () {
    return view('stud');
});

Route::post('/add', [AdminloginController::class, 'add'])->name('form');