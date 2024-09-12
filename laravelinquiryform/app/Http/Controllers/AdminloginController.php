<?php

namespace App\Http\Controllers;

use App\Models\Adminlogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateAdminlogin;
use Illuminate\Support\Facades\Hash;

class AdminloginController extends Controller
{
    //
// login
    public function adminlogin()
    {
        // call adminlogin() method then show login page
     return view('auth.loginadmin');
    }


    // loginpost request function

function loginpost(Request $request ){
   $request->validate([
   "email"=>"required|string",
   "password"=>"required|string"

   ]);
   
   $user=new Adminlogin();
   $user->email=$request->email;
    $user->password=Hash::make($request->password);
 
    if ($user->save()) {
   return redirect(route('/admin'))->with("success","Successfull admin login");
 }
 return redirect(route("login"))
 ->with("error","failed login user..");


}


// admin dashboard show page get route 
function adminshow(){
return view('admin');
}


// logout admin




// show updatepasswordnew form register admin
function createNewpassword(Request $request){
return view('auth.createNewPassword');
}


//update password by post req (registerpost)
function createNewpasswordpost(Request $request){



}




}
// logout admin









