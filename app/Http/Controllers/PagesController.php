<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Lelang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function landing()
    {
        if(Lelang::where('lelang.status', 'Dibuka')->orWhere('lelang.status', 'Ditutup')->exists()){
            $product1 = Lelang::where('lelang.id', '1')
                ->join('barang', 'barang.id', '=', 'lelang.id_barang')
                // ->leftJoin('history', 'history.id_lelang', '=', 'lelang.id')
                ->leftJoin('history', function ($join) {
                    $join->on('lelang.id', '=', 'history.id_lelang')
                        ->whereRaw('history.penawaran_harga = (SELECT MAX(penawaran_harga) FROM history WHERE id_lelang = lelang.id)');
                })
                ->select('lelang.id', 'barang.nama_barang', 'barang.harga_awal', 'barang.deskripsi_barang', 'barang.foto', 'history.penawaran_harga')
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
                ->first();
    
            $product2 = Lelang::where('lelang.id', '2')
                ->join('barang', 'barang.id', '=', 'lelang.id_barang')
                // ->leftJoin('history', 'history.id_lelang', '=', 'lelang.id')
                ->leftJoin('history', function ($join) {
                    $join->on('lelang.id', '=', 'history.id_lelang')
                        ->whereRaw('history.penawaran_harga = (SELECT MAX(penawaran_harga) FROM history WHERE id_lelang = lelang.id)');
                })
                ->select('lelang.id', 'barang.nama_barang', 'barang.harga_awal', 'barang.deskripsi_barang', 'barang.foto', 'history.penawaran_harga')
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
                ->first();
    
            $product3 = Lelang::where('lelang.id', '3')
                ->join('barang', 'barang.id', '=', 'lelang.id_barang')
                // ->leftJoin('history', 'history.id_lelang', '=', 'lelang.id')
                ->leftJoin('history', function ($join) {
                    $join->on('lelang.id', '=', 'history.id_lelang')
                        ->whereRaw('history.penawaran_harga = (SELECT MAX(penawaran_harga) FROM history WHERE id_lelang = lelang.id)');
                })
                ->select('lelang.id', 'barang.nama_barang', 'barang.harga_awal', 'barang.deskripsi_barang', 'barang.foto', 'history.penawaran_harga')
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
                ->first();
        } else {

        }

        return view('pages.landing', [
            'product1' => $product1,
            'product2' => $product2,
            'product3' => $product3,
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
