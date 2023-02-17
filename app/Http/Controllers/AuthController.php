<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(){
        return view ('register');
    }

    public function registerStore(Request $request){
        request()->validate(
            [
                'name' => 'required|min:4|unique:users',
                'email' => 'required|unique:users',
                'password' => 'required|min:8',
            ],
            [
                'name.required' => 'Nama harus diisi !',
                'name.unique' => 'Nama telah digunakan ;(',
                'name.min' => 'Nama minimal harus 4 karakter !!',
                'email.required' => 'Email harus diisi',
                'email.unique' => 'Email telah digunakan ;(',
                'password.required' => 'Password harus diisi !',
                'password.min' => 'Password minimal harus 8 karakter !!',
            ]
        );
        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)

        ]);

        return view('/login')->with('alert', 'Registrasi Berhasil!');
    }

    public function login(){
        return view('login');
    }

    public function loginStore(Request $request){
        $data = $request->validate(
            [
                'email' => 'required',
                'password' => 'required|min:8',
            ],
            [
                'email.required' => 'Email harus diisi !',
                'password.required' => 'Password harus diisi !',
                'password.min' => 'Password minimal harus 8 karakter !!',
            ]
        );
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            // dd ($data);
            return redirect()->intended('/home')->with('alert', 'Welcome Back');
        }
        return back('/login')->with('error', 'Email atau Password Salah!');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('alert', 'Anda telah logout');
    }
}
