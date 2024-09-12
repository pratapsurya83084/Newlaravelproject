<?php

use App\Http\Controllers\AdminloginController;
use App\Http\Controllers\RegisterUserController;
use App\Models\RegisterUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inquiryform');
});


// post route for inquiryform
Route::post('/inquiryform',[RegisterUserController::class,'inquiryPost'])->name('inquiry.post');

// // after submit the form then naviagte this route
Route::get('/successSubmit',[RegisterUserController::class,'successSubmit'])->name("successSubmit");





Route::get('/login',[AdminloginController::class,'adminlogin'])->name("login");
// admin post
Route::post('/login',[AdminloginController::class,'loginpost'])->name('loginpost');   //action="{{route('login.post')}}"  name use in loginadmin.blade.php file action.



// create a get route to /admin
Route::get('/admin',[AdminloginController::class,'adminshow'])->name('admin');




// create new adminpass route
Route::get('/admin/updatepassword',[AdminloginController::class,'createNewpassword']);
Route::post('/admin/updatepassword',[AdminloginController::class,'createNewpasswordpost'])
->name('createNewpassword.post');   //action="{{route('login.post')}}"  name use in loginadmin.blade.php file action.






// Route::get('/admin', function () {
//     return view('admin');
// });

