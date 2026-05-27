<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Show register page
    public function showRegister()
    {
        return view('auth.register');
    }

    // Show login view
    public function showLogin()
    {
        return view('auth.login');
    }

    // Hanle register logic
    public function register(Request $request)
    {
        // validate data
        $validatedData = $request->validate([
            'name' => 'required|string|min:3|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ]);

        // create user in the users table
        $user = User::create($validatedData);

        // login user
        Auth::login($user);

        // redirect user upon succesful login
        return redirect()->route('developers.index');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($validatedData)){
            // regenerate session on request
            $request->session()->regenerate();

            // redirect user
            return redirect()->route('developers.index');
        }

        // throw errors if credentials are incorrect

        throw ValidationException::withMessages(['error' => 'Invalid credentials, try again']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // clear all data from the request session
        $request->session()->invalidate();

        // regenerate new token session
        $request->session()->regenerateToken();

        // redirect the user
        return redirect()->route('login');
    }
}
