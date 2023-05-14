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
            toast('Berhasil Log In!','success');
            return redirect('/profile');
        } else {
            toast('Log In Gagal!','warning');
            return redirect('/login');
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
            toast('Berhasil Register!','success');
            return redirect('profile');
        } else {
            toast('Register Gagal!','warning');
            return redirect('register');
        }
    }

    function logout()
    {
        Auth::logout();
        toast('Berhasil Log Out!','success');
        return redirect('/');
    }
}
?>
