<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function landing()
    {
        return view('pages.landing', [
            'title' => 'Pojok Lelang | Home'
        ]);
    }

    public function profile()
    {
        $getTelepon = Masyarakat::select('telepon')->where('id_user', Auth::user()->id)->get();

        foreach ($getTelepon as $get)
            $telepon = $get->telepon;

        return view('pages.profile-new')->with([
            'telepon' => $telepon,
            'title' => 'Pojok Lelang | Your Profile'
        ]);
    }

    public function about()
    {
        return view('pages.about-new', [
            'title' => 'Pojok lelang | About'
        ]);
    }
}
