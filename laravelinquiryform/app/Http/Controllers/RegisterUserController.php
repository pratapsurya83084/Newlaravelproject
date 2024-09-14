<?php

namespace App\Http\Controllers;

use App\Models\RegisterUser;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{

    // inquiryUser form method
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


    public function getUserInuiry()
    {
        // $registerUser = new RegisterUser();
        // $users = $registerUser->get_all_data();

        $users = RegisterUser::all(); // Use the Eloquent query to get all user records

        // Pass the data to the view
        return view('admin', ['users' => $users]);

        // echo "<pre>";
        // print_r($users);
        // return view('admin', compact('data',$users));
    }


    // delete user from Admin  UserList
    public function deleteUser($id)
    {

        $deletedUser = RegisterUser::find($id);

        if ($deletedUser) {
            $deletedUser->delete();

            return redirect('/admin')->with("delete", "User Deleted SuccessFully");
        } else {
            return redirect('/admin')->with("NotDelete", "User Not DELETE");
        }
    }
}
