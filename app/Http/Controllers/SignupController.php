<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function ShowSignupForm() {
        return view('auth.register');
    }
    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string' //roles passed on form submission
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' =>  ($request->role)
        ]);

        Auth::login($user);
        return $this->redirectbasedonrole($user);
    }

    // login 

    public function ShowLoginForm() {
        return view('auth.login');
    }

    // login function
    public function login (Request $request) {
        $credientials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credientials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            return $this->redirectbasedonrole($user);
        }
        return back()->withErrors([
            'email'=>'The Provided credentials do not match our records.',
        ]);
    }

    // logout function
    public function logout (Request $request) {
        Auth::logout();
        return redirect()->route('login.form');

    }

    private function redirectbasedonrole($user) {
        switch ($user->role) {
            case 'admin':
                return redirect()->route('dashboards.admin');
            case 'customer':
                return redirect()->route('dashboards.customer');
            case 'seller':
                return redirect()->route('dashboards.seller');
            default:
                return redirect()->route('/');
        }
    }

}