<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
<<<<<<< HEAD
use App\Models\User;
=======
>>>>>>> origin/gabisa
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function landing()
    {
        return view('pages.landing', [
            'title'=>'Pojok Lelang | Home'
        ]);
    }

    public function profile()
    {
<<<<<<< HEAD
        $telepon = User::join('masyarakat', 'users.id', '=', 'masyarakat.id_user')
            ->select('masyarakat.telepon')
            ->get();
    
=======
        $getTelepon = Masyarakat::select('telepon')->where('id_user', Auth::user()->id)->get();

        foreach ($getTelepon as $get)
        $telepon = $get->telepon;
        
>>>>>>> origin/gabisa
        return view('pages.profile-new')->with([
            'telepon' => $telepon,
            'title'=>'Pojok Lelang | Your Profile'
        ]);
    }

    public function about()
    {
        return view('pages.about-new', [
            'title'=>'Pojok lelang | About'
        ]);
    }

    public function error()
    {
        return view('pages.error-page', [
            'title' => 'Error'
        ]);
    }
}
