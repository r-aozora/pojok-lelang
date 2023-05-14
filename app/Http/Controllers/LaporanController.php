<?php

namespace App\Http\Controllers;

use App\Models\Lelang;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $lelang = Lelang::orderBy('id_lelang', 'desc');

        return view('laporan.index')->with([
            'lelang' => $lelang,
            'title' => 'Pojok Lelang | Laporan Lelang',
        ]);
    }

    public function print()
    {
        $lelang = Lelang::orderBy('id_lelang', 'desc');

        return view('laporan.print')->with([
            'lelang' => $lelang,
            'title' => 'Pojok Lelang | Laporan Lelang',
        ]);
    }
}
