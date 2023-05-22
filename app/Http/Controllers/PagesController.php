<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $telepon = User::where('users.id', Auth::user()->id)
            ->join('masyarakat', 'users.id', '=', 'masyarakat.id_user')
            ->select('masyarakat.telepon')
            ->first();

        $history = History::join('barang', 'barang.id', '=', 'history.id_barang')
            ->leftJoin('lelang', 'lelang.id', '=', 'history.id_lelang')
            ->select('history.id', 'history.penawaran_harga', 'barang.nama_barang', 'barang.harga_awal', 'lelang.harga_akhir', 'lelang.status')
            ->where('history.id_masyarakat', Auth::user()->id)
            ->get();

        return view('pages.profile-new')->with([
            'telepon' => $telepon,
            'history' => $history,
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
