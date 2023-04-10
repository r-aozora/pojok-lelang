<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlurController extends Controller
{
    public function landing()
    {
        return view('pages.landing', [
            'title'=>'Pojok Lelang | Home'
        ]);
    }

    public function dashboard()
    {
        return view('pages.dashboard')->with([
            'title'=>'Pojok Lelang | Dashboard'
        ]);
    }

    public function about()
    {
        return view('pages.about', [
            'title'=>'Pojok lelang | About'
        ]);
    }
}
