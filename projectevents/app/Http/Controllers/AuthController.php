<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('start');
    }
    public function authenticate(Request $request) {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('dashboard');
        }
        return redirect('login')->with('error', 'Босяк, шляпа вышла');
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function register() {
        
    }
}