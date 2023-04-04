<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class SessionController extends Controller
{
    function index()
    {
        return view('pages/login');
    }

    function login(Request $request)
    {
        Session::flash('username', $request->username);

        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ], [
            'username.required'=>'Username Harus Diisi',
            'password.required'=>'Password Harus Diisi',
        ]);

        $infologin = [
            'username'=>$request->username,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('/dashboard')->with('success', Auth::user()->nama.'Berhasil Log In');
        } else {
            return redirect('/login')->withErrors('Log In Gagal');
        }
    }

    function register()
    {
        return view('pages.register');
    }

    function create(Request $request)
    {
        Session::flash('nama', $request->nama);
        Session::flash('username', $request->username);

        $request->validate([
            'nama'=>'required',
            'username'=>'required|unique:users',
            'password'=>'required|min:8'
        ], [
            'nama.required'=>'Nama Harus Diisi',
            'username.required'=>'Username Harus Diisi',
            'username.unique'=>'Silakan Masukkan Username Yang Lain',
            'password.required'=>'Password Harus Diisi',
            'password.min'=>'Password Harus 8 Karakter',
        ]);

        $data = [
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
        ];
        User::create($data);

        $infologin = [
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            // return 'sukses';
            return redirect('dashboard')->with('success', Auth::user()->nama.'Berhasil Register');
        } else {
            // return 'gagal';
            return redirect('register')->withErrors('Register Gagal');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Berhasil Log Out');
    }
}
?>
