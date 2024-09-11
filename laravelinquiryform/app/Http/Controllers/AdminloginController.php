<?php

namespace App\Http\Controllers;

use App\Models\Adminlogin;
use Illuminate\Http\Request;

class AdminloginController extends Controller
{
    //

    public function add(Request $request) {

        $validatedData = $request->validate([
            // 'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);

        Adminlogin::create($validatedData);

        return redirect()->back()->with('success', 'Data submitted successfully!');
        //   return response()->json([
        //    'message'=>"successfull login",
        //    'success'=>true,
        //   ]);
}
}
