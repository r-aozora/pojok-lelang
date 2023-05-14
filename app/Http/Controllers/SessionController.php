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
        return view('pages.login-new', [
            'title' => 'Pojok Lelang | Log In'
        ]);
    }

    function login(Request $request)
    {
        Session::flash('username', $request->username);

        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        $infologin = [
            'username'=>$request->username,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('/profile')->with('success', Auth::user()->nama.'Berhasil Log In');
        } else {
            return redirect('/login')->withErrors('Log In Gagal');
        }
    }

    function register()
    {
        return view('pages.register-new',[
            'title' => 'Pojok Lelang | Register'
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
            'level'=>'Masyarakat',
        ];
        User::create($data);

        $infologin = [
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            // return 'sukses';
            return redirect('profile')->with('success', Auth::user()->nama.'Berhasil Register');
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
