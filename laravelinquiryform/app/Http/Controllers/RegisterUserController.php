<?php

namespace App\Http\Controllers;

use App\Models\RegisterUser;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    //make register method to store in table

    public function register(Request $request)
    {
        $filds = $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|max:255',
            'courseName' => 'required|max:255',
            'country' => 'required|max:255',
            'job_role' => 'required|max:255',
            'course_Enroll_Date' => 'required|max:255',
            'phone_Number' => 'required|max:255',
            'service' => 'required|max:255',
        ]);

   RegisterUser::create([$filds]);
        return response()->json([
            'message'=>$filds,
            "success"=>true
        ]);
        // RegisterUser::create([$filds]);
        // return "ok";
    //     $register = RegisterUser::create($filds);

    //    // Return a JSON response
    //     return response()->json([
    //         'message' => 'Data saved successfully'
    //     ]);
    // dd('ok');
//     return[
// "message"=>"successfull registered user"
//     ];
    }

// public function regi(){
// dd('ok');
// }
}
