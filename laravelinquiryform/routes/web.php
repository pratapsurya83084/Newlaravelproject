<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inquiryform');
});

Route::get('/login', function () {
    return view('loginform');
});

Route::get('/admin/updatepassword', function () {
    return view('createNewPassword');
});


Route::get('/admin', function () {
    return view('admin');
});