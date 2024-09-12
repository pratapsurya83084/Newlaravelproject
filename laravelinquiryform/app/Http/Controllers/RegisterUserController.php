<?php

namespace App\Http\Controllers;

use App\Models\RegisterUser;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    //make register method to store in table

    // public function register(Request $request)
    // {
    //     $filds = $request->validate([
    //         'username' => 'required|max:255',
    //         'email' => 'required|max:255',
    //         'courseName' => 'required|max:255',
    //         'country' => 'required|max:255',
    //         'job_role' => 'required|max:255',
    //         'course_Enroll_Date' => 'required|max:255',
    //         'phone_Number' => 'required|max:255',
    //         'service' => 'required|max:255',
    //     ]);

    //     RegisterUser::create([
    //         'username' =>$request->username,
    //         'email' => $request->email,
    //         'courseName' => $request->courseName,
    //         'country' => $request->country,
    //         'job_role' => $request->job_role,
    //         'course_Enroll_Date' => $request->course_Enroll_Date,
    //         'phone_Number' => $request->phone_Number,
    //         'service' => $request->service
    //     ]);

    //     return redirect('/successSubmitForm')->with('status','User Registerd successfully');


    // }


    // show success page after inquiry form submit
    public function inquiryPost(Request $request)
    {
        // Validate form fields
        $fields = $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'courseName' => 'required|max:255', // Updated name to 'course'
            'country' => 'required|max:255',
            'job_role' => 'required|max:255',
            'course_Enroll_Date' => 'required|date', // Ensure it's a valid date
            'phone_Number' => 'required|digits:10', // Ensure it's a 10-digit phone number
            'service' => 'required|max:255',
        ]);

        // Store data in the database
        $user = RegisterUser::create($fields);

        // Redirect based on success/failure
        if ($user) {
            return redirect('/successSubmit')->with('status', 'User Registered Successfully');
        } else {
            return redirect('/inquiryform')->with('error', 'User Registration Failed');
        }
    }


    // show successSubmit page
    public function successSubmit()
    {
        return view('successSubmitForm'); // You can adjust this based on your view
    }
}
