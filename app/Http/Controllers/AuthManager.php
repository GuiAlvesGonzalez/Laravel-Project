<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    function login(){
        if (Auth::check()){
            return redirect(route('home'));
        }
    return view('Login');
    }
    function registration(){
    return view('Registration');
    }
    function LoginPost(Request $Request){
    $Request->validate([
    'email' => 'required',
    'password' => 'required'
    ]);

    $credentials = $Request->only('email', 'password');
    if(Auth::attempt($credentials)){
        return redirect()->intended(route('home'));
    }
    return redirect(route('Login'))->with("error", "Login failed");
    }
    function RegistrationPost(Request $Request){
        $Request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
            ]);

            $data['name'] = $Request->name;
            $data['email'] = $Request->email;
            $data['password'] = Hash::make($Request->password);
            $user = User::create($data);
            if(!$user){
            return redirect(route('Registration'))->with("error", "Registration failed");
            }
            return redirect(route('Login'))->with("success", "Registration success");
            
    }
    function Logout(){
        
        Auth::Logout();
        return redirect(route('Login'));

    }
    //
}
