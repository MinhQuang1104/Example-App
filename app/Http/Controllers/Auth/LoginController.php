<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index() {
        return view('layouts.login');
    }
    
    public function userLogin(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->has('remember'))) {
            $data['role'] = Auth::user()->role;
            return view('dashboard', $data);
            // return redirect()->intended('home')->withSuccess('Signed in');
        }
        return redirect('login')->with('message','Login details are not valid');
    }

    public function signUp() {
        return view('layouts.register');
    }

    public function userSignUp(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'string|max:255',
            'email' => 'string|email|max:255|unique:users,email',
            'password' => 'string|min:6'
        ]);
        
        if ($validator->fails()) {
            return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('login');
    }

    public function changePassword() {
        return view('layouts.change_password');
    }

    public function updatePassword(Request $request) {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }

    public function logOut() {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
