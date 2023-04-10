<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('user/register', $data);
    }
    public function register_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'username' => 'required|unique:user',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
        $user = new User([
            'email' => $request -> email,
            'username' => $request -> username,
            'password' => Hash::make($request -> password),
            'type' => 'user'
        ]);
        $user->save();
        return redirect()->route('login')->with('success', 'Registration success. Please login!');
    }
    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login', $data);
    }
    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request -> username, 'password' => $request -> password])) {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
        return back()->withErrors([
            'password' => 'Wrong username or password!',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}