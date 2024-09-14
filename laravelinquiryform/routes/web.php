<?php

use App\Http\Controllers\AdminloginController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Middleware\AuthMiddleware;
use App\Models\RegisterUser;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('inquiryform');
// });

Route::get('/', function () {
    return view('inquiryform');
});

// post route for inquiryform
Route::post('/inquiryform',[RegisterUserController::class,'inquiryPost'])->name('inquiry.post');

// // after submit the form then naviagte this route
Route::get('/successSubmit',[RegisterUserController::class,'successSubmit'])->name("successSubmit");

Route::get('/login',[AdminloginController::class,'adminlogin'])->name("login");
// admin post
Route::post('/admin',[AdminloginController::class,'loginpost'])->name('loginpost');   //action="{{route('login.post')}}"  name use in loginadmin.blade.php file action.




// protected routes
 
// create a get route to /admin
Route::get('/admin',[AdminloginController::class,'adminshow'])->name('admin');



// create new adminpass route if not remember pass
Route::get('/admin/updatepassword',[AdminloginController::class,'createNewpassword']);
Route::post('/updatepassword',[AdminloginController::class,'createNewpasswordpost'])->name('createNewpasswordPost');   //action="{{route('login.post')}}"  name use in loginadmin.blade.php file action.



// logout route
Route::get('logout',[AdminloginController::class,'logout'])->name('logoutadmin');

// updatePassword
Route::post('/updatePassword',[AdminloginController::class,'UpdatePassword'])->name('updateadminPassword');

Route::get('/getUserInuiry',[RegisterUserController::class,'getUserInuiry'])->name('getAllUser');


// delete user from admin User table list
Route::delete('/deleteUser/{id}',[RegisterUserController::class,'deleteUser'])->name('user.delete');
