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
    // login get route method
    public function adminlogin()
    {

        // call adminlogin() method then show login page
        return view('auth.loginadmin');
    }


    // loginpost request function
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
            //    email basis session start and use for login
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
        return view('createNewPassword');
    }

    //update password by post req (registerpost)
    function UpdatePassword(Request $request)
    {
        $userdetail =  $request->validate([
            'email' => 'required|email',
            'currentPassword' => 'required',
            'newPassword' => 'required'
        ]);


        $user = Adminlogin::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->currentPassword, $user->password)) {


            return redirect('/admin')->with('failPassword', 'Something went wrong! Invalid credentials.');
        }

        $user->password = Hash::make($request->newPassword);
        $user->save();

        // Redirect to the login page with a success message
        return redirect('/admin')->with('successSubmit', 'Password updated successfully.');
    }




    //update password by post req (registerpost)
    function createNewpasswordpost(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'newPassword' => 'required',
            'password' => 'required'
        ]);

        if ($data['newPassword'] === $data['password']) {
            // echo "<pre>";
            // print_r($data);
            $chk = Adminlogin::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

            if ($chk) {
                return redirect('/login')->with('successPassword', 'Password updated successfully.');
            } else {
                return redirect('/admin/updatepassword')->with('failPassword', 'Something went wrong! Password not updated.');
            }
        } else {
            return redirect('/admin/updatepassword')->with('failPassword', 'Something went wrong! Invalid credentials.');
        }

    }
}
