<?php

namespace App\Http\Controllers;

use App\Models\Lelang;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $lelang = Lelang::where('status', 'Ditutup')
            ->join('history', 'history.id_lelang', '=', 'lelang.id')
            ->leftJoin('barang', 'barang.id', '=', 'lelang.id_barang')
            ->leftJoin('users', 'users.id', '=', 'lelang.id_masyarakat')
            ->select('lelang.id', 'barang.nama_barang', 'lelang.created_at', 'users.nama', 'history.penawaran_harga', 'lelang.status')
            ->where(function ($query) {
                $query->whereNull('history.id_lelang')
                    ->orWhere('history.penawaran_harga', function ($subquery) {
                        $subquery->select('penawaran_harga')
                            ->from('history')
                            ->whereColumn('id_lelang', 'lelang.id')
                            ->orderByDesc('penawaran_harga')
                            ->limit(1);
                    });
            })
            ->orderBy('id_lelang', 'desc')
            ->get();

        return view('laporan.index')->with([
            'lelang' => $lelang,
            'title' => 'Pojok Lelang | Laporan Lelang',
        ]);
    }

    public function print()
    {
        $lelang = Lelang::where('status', 'Ditutup')
            ->join('history', 'history.id_lelang', '=', 'lelang.id')
            ->leftJoin('barang', 'barang.id', '=', 'lelang.id_barang')
            ->leftJoin('users', 'users.id', '=', 'lelang.id_masyarakat')
            ->select('lelang.id', 'barang.nama_barang', 'lelang.created_at', 'users.nama', 'history.penawaran_harga', 'lelang.status')
            ->where(function ($query) {
                $query->whereNull('history.id_lelang')
                    ->orWhere('history.penawaran_harga', function ($subquery) {
                        $subquery->select('penawaran_harga')
                            ->from('history')
                            ->whereColumn('id_lelang', 'lelang.id')
                            ->orderByDesc('penawaran_harga')
                            ->limit(1);
                    });
            })
            ->orderBy('id_lelang', 'desc')
            ->get();

        return view('laporan.print')->with([
            'lelang' => $lelang,
            'title' => 'Pojok Lelang | Laporan Lelang',
        ]);
    }
}
