<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function login(){
        return view('auth/login');
    }
    
    public function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        
        if(Auth::attempt($credentials)){
            return redirect(route('home'));
        }

        return redirect(route('login'))->with('error', 'Login details are not valid');
    }

    public function register(){
        return view('auth/register');
    }

    public function registerPost(Request $request){
        $request->validate([
            'name'            => 'required',
            'username'        => 'required|unique:users',
            'email'           => 'required|email|unique:users',
            'password'        => 'required|min:6|confirmed',
            'phone'           => 'numeric|digits:11|unique:users',
        ]);
        
        $data['name'] = $request->name;
        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['date'] = $request->date;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;

        $user = User::create($data);

        if(!$user){
            return redirect(route('register'))->with('error', 'Registeration details are not valid');
        }
        return redirect(route('login'))->with('success', 'Registeration success, Login to access the app');
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect(route('login'));
    }
}
