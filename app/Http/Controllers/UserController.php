<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        return view('screens.auth.login');
    }

    public function register(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $data = $request->all();
        $this->create($data);

        return redirect('dashboard')->with('success', 'Registration Successful!');
    }

    public function create(array $data) {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function dashboard() {
        if(Auth::check()) {
            return view('dashboard');
        }
        return redirect('login')->with('warning', 'You must be logged in to access this page!');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
