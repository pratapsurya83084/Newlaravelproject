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

    public function loginpost(Request $request)
    {
        // Validate form data
        $request->validate([

            'email' => 'required|email|unique:adminlogin',
            'password' => 'required',
        ]);
        try {
            // register user here
            $new_user = new Adminlogin();

            $new_user->email = $request->email;

            $new_user->password = Hash::make($request->password);
            $new_user->save();

            // Generate a session token if needed (example)
            $token = bin2hex(random_bytes(16));
            session(['login_token' => $token]);

            return redirect('/admin')->with('success', 'User Added Successfully');
        } catch (\Exception $e) {
            return redirect('/')->with('fail', $e->getMessage());
        }
    }



    // admin dashboard show page get route 
    function adminshow()
    {
        return view('admin');
    }


    // logout admin




    // show updatepasswordnew form register admin
    function createNewpassword(Request $request)
    {
        return view('auth.createNewPassword');
    }


    //update password by post req (registerpost)
    function createNewpasswordpost(Request $request) {}
}
// logout admin
