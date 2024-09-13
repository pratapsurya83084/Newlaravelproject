<?php

namespace App\Http\Controllers;

use App\Models\Adminlogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateAdminlogin;
use App\Models\RegisterUser;
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

    // public function loginpost(Request $request)
    // {
    //     // Validate form data
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     try {
    //         // Check if the user exists in the adminlogin table
    //         $user = Adminlogin::where('email', $request->email)->first();

    //         // If user doesn't exist or password doesn't match, redirect back with an error
    //         if (!$user || !Hash::check($request->password, $user->password)) {
    //             return redirect('/login')->with('fail', 'Invalid email or password');
    //         }

    //         // If credentials are correct, generate a token value
    //         // If credentials are correct, set a session variable
    //         return redirect('/admin')->with('status', ['success' => true, 'message' => 'Login successful']);
    //         $arr=array("status"=>true,"message"=>"success Login");
    //     } catch (\Exception $e) {
    //         // If there is any exception, redirect back with the error message
    //         return redirect('/login')->with('fail', $e->getMessage());
    //     }

    // }

    public function loginpost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = Adminlogin::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            $request->session()->put('Adlogin', false);
            return redirect('/login')->with('fail', 'Invalid email or password');
        } else {
            $request->session()->put('user', $user->email);
            $request->session()->put('Adlogin', true);

            return redirect()->to('/admin');
        }
    }


    // admin dashboard show page get route 
    function adminshow()
    {
        $user = session('user');
        $login = session('Adlogin');

        // echo $user->email;
        // echo $login;

        if ($login) {

            $users = RegisterUser::all(); 
            return view('admin', ['users' => $users]);           
        } else {
            return redirect()->to('/login');
        }
    }


    // logout admin
    function logout()
    {
        session()->forget('user');
        session()->forget('Adlogin');
        return redirect()->to('/login');
    }



    // show updatepasswordnew form register admin
    function createNewpassword(Request $request)
    {
        return view('auth.createNewPassword');
    }




    //update password by post req (registerpost)
    function UpdatePassword(Request $request)
    {
        $userdetail =  $request->validate([
            'email' => 'required|email',
            'currentPassword' => 'required',
            'newPassword' => 'required'
        ]);

        print_r($userdetail);
        $password = Hash::make($request->currentPassword);
        $user = Adminlogin::where(['email' => $request->email, 'password' => $password])->first();

        // print_r($user);
        // exit;
        if (!empty($user)) {
            return redirect('/admin')->with("status", "creadential invalid");
        } else {

            $newPass = Hash::make($request->newPassword);
            $chk = Adminlogin::where('email', $request->email)->update(['password' => $newPass]);

            // echo $chk;
            if ($chk) {
                return redirect('/admin')->with("status", "password updated successfully");
            } else {
                return redirect('/admin')->with("status", "Something Went Wrong!");
            }
        }
    }



    //update password by post req (registerpost)
    function createNewpasswordpost(Request $request) {

        $userdetail =  $request->validate([
            'email' => 'required|email',
            'newPassword' => 'required',
            'confirmPassword' => 'required'
        ]);

print_r($userdetail);
    }
}
// logout admin
