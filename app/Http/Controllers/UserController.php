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

    public function login(Request $request) {
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('success', 'You have been logged in');
        }
        $validator['emailPassword'] = 'Email or password is incorrect';
        return redirect()->back()->withErrors($validator);
    }

    public function register(Request $request) {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'password-repeat' => 'required|same:password',
        ]);

        $data = $request->all();
        $this->create($data);

        return redirect()->route('login')->with('success', 'You created an account! Now log in with you credentials');
    }

    public function create(array $data) {
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function completeRegistration(Request $request) {
        $validatedData = $request->validate([
            'firstname'   => 'required|string|max:255',
            'middlename'  => 'nullable|string|max:255',
            'lastname'    => 'required|string|max:255',
            'region'      => 'required|string|max:255',
            'city'        => 'required|string|max:255',
            'streetname'  => 'required|string|max:255',
            'housenumber' => 'required|integer',
            'zip_code'    => 'required|string|max:6',
        ]);

        $user = Auth::user();
        $user->fill($validatedData);

        if ($user->save()) {
            return redirect()->route('dashboard')->with('success', 'You completed your account setup!');
        }

        return redirect()->back()->with('error', 'Failed to complete account setup. Please try again.');
    }

    public function dashboard() {
        $user = Auth::user();
        if ($user->firstname === null) {
            return view('screens.auth.complete-registration', ['user' => $user]);
        }
        if(Auth::check()) {
            return view('screens.dashboard.home');
        }
        return redirect('login')->with('warning', 'You must be logged in to access this page!');
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
