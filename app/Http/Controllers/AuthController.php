<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.signup');
    }
    public function sign_up(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8',
            'role_id' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id

        ]);
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();    
        return redirect()->route('dashboard')
            ->withSuccess('You have successfully registered & logged in!');
    }

    public function login1()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);


        if (Auth::attempt($credentials)) {
            // Authentication successful
            $request->session()->start();

            $userId = Auth::user()->id;
            $roleId = Auth::user()->role_id;

            $request->session()->regenerate();

            if ($roleId == 1) {
                // If the user role is 1, redirect to the admin dashboard
                return redirect()->route('dashboard');
                // ->withSuccess('You have successfully logged in!');
            } elseif ($roleId == 2) {
                // If the user role is 2, redirect to the doctor dashboard
                return redirect()->route('dashboard')
                    ->withSuccess('You have successfully logged in!');
            } else {
                // If the user role doesn't match any database records, set a default redirect here
                return redirect()->route('home');
            }
        } else {
            return back()->withErrors([
                'email' => 'Your provided credentials do not match in our records.',
            ])->onlyInput('email');
        }
    }
    /////////////////////////////
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login1')
            ->withSuccess('You have logged out successfully!');
    }
}
