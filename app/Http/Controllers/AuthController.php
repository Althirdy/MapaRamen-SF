<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{

    public function index(Request $request)
    {
        $fields = $request->validate([
            'username' => ['required', 'max:100'],
            'password' => ['required'],
            'role' => ['required']
        ]);
        if (Auth::attempt(['username' => $fields['username'], 'password' => $fields['password'], 'role' => $fields['role']])) {
            $request->session()->regenerate();
            return redirect()->intended('manager');
        }

        return back()->withErrors([
            'error' => 'Username or Password is invalid'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect()->route('home');
    }
}
