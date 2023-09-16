<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function auth(Request $request)
    {
        Session::flash('email', $request->email);
        Session::flash('password', $request->password);

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],[
            'email.required' => 'email wajib di isi',
            'password.required' => 'password wajib di isi'
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return redirect()->route('login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function create(Request $request)
    {
        Session::flash('email', $request->email);
        Session::flash('name', $request->name);
        Session::flash('role', $request->role);
        Session::flash('password', $request->password);

          $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'required',
            'name' => 'required',
        ],[
            'email.required' => 'email wajib di isi',
            'email.unique' => 'Email sudah di gunakan',
            'password.required' => 'password wajib di isi',
            'name.required' => 'Nama wajib di isi',
            'role.required' => 'role wajib di isi'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        ];

        User::create($data);
        return redirect()->route('register')->with('success','Berhasil Create Akun');

    }
}
