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
        ]);

        $data = [
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
            'level'=>'Administrator',
        ];
        User::create($data);

        $infologin = [
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            toast('Berhasil Register!','warning');
            return redirect('profile');
        } else {
            toast('Register Gagal!','warning');
            return redirect('login');
        }
    }
}
