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
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        try {
            // Check if the user exists in the adminlogin table
            $user = Adminlogin::where('email', $request->email)->first();
    
            // If user doesn't exist or password doesn't match, redirect back with an error
            if (!$user || !Hash::check($request->password, $user->password)) {
                return redirect('/login')->with('fail', 'Invalid email or password');
            }
    
            // If credentials are correct, generate a token value
            // If credentials are correct, set a session variable
            return redirect('/admin')->with('status', ['success' => true, 'message' => 'Login successful']);
            $arr=array("status"=>true,"message"=>"success Login");
        } catch (\Exception $e) {
            // If there is any exception, redirect back with the error message
            return redirect('/login')->with('fail', $e->getMessage());
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
