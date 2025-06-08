<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use App\Mail\NewUserRegisteredMail;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'confirmed',
                'min:8',
                'regex:/[0-9]/', // At least one digit
                'regex:/[@$!%*#?&]/' // At least one special character
            ],
        ]);

        // Create user
        $user = User::create([  //i just changed this line to use User::create
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

         // Send the email notification to the system admin 
        Mail::to('admin@example.com')->send(new NewUserRegisteredMail($user));


        // Redirect or show success
        return redirect()->route('login')->with('success', 'Registration successful! You can now log in.');
    }
}
