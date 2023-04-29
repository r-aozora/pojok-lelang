<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SignupadminController extends Controller
{
    function register()
    {
        return view('pages.register-admin-new', [
            'title' => 'Pojok Lelang | Register Admin'
        ]);
    }

    function create(Request $request)
    {
        Session::flash('nama', $request->nama);
        Session::flash('username', $request->username);

        $request->validate([
            'nama'=>'required',
            'username'=>'required|unique:users',
            'password'=>'required|min:8',
            'level'=>'required',
        ], [
            'nama.required'=>'Nama Harus Diisi',
            'username.required'=>'Username Harus Diisi',
            'username.unique'=>'Silakan Masukkan Username Yang Lain',
            'password.required'=>'Password Harus Diisi',
            'password.min'=>'Password Harus 8 Karakter',
            'level.required'=>'Level Harus Diisi',
        ]);

        $data = [
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
            'level'=>$request->level,
        ];
        User::create($data);

        $infologin = [
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>$request->password,
            'level'=>$request->level,
        ];

        if(Auth::attempt($infologin)){
            if(auth()->user()->level === 'Administrator'){
                return redirect('admin/dashboard')->with('success', Auth::user()->nama.'Berhasil Log In');
            } elseif(auth()->user()->level === 'Petugas'){
                return redirect('petugas/dashboard')->with('success', Auth::user()->nama.'Berhasil Log In');
            }
        } else {
            return redirect('login')->withErrors('Register Gagal');
        }
    }
}
