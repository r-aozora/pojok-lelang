<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pages.profile')->with([
            'title'=>'Pojok Lelang | Your Profile'
        ]);
    }

    public function about()
    {
        return view('pages.about', [
            'title'=>'Pojok lelang | About'
        ]);
    }
}
