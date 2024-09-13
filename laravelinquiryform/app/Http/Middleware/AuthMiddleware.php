<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
    //  */
    // public function handle(Request $request, Closure $next): Response
    // {
    //      // Check if the user is authenticated by session
    //      if ($request->session()->has('user')) {
    //         // Retrieve the user from the session
    //         $user = $request->session()->get('user');

    //         // Perform additional checks if needed (e.g., admin role)
    //         if ($user->email === 'admin11@gmail.com') {
    //             // Allow access to the admin route
    //             return $next($request);
    //         }
    //     }

    //     // Redirect to login page if not authenticated or not an admin
    //     return redirect('/login')->with('fail', 'You must be logged in to access this page');
    // }
}
