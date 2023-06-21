<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Lelang;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lelang = Lelang::where('status', 'Dibuka')
            ->join('barang', 'barang.id', '=', 'lelang.id_barang')
            // ->leftJoin('history', 'history.id_lelang', '=', 'lelang.id')
            ->leftJoin('history', function ($join) {
                $join->on('lelang.id', '=', 'history.id_lelang')
                    ->whereRaw('history.penawaran_harga = (SELECT MAX(penawaran_harga) FROM history WHERE id_lelang = lelang.id)');
            })
            ->select('lelang.id', 'lelang.created_at', 'barang.nama_barang', 'barang.harga_awal', 'barang.foto', 'history.penawaran_harga')
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
            ->orderBy('lelang.updated_at', 'desc')
            ->get();

        return view('gallery.index')->with([
            'lelang' => $lelang,
            'title' => 'Pojok Lelang | Galeri Lelang',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_lelang' => 'required',
            'id_barang' => 'required',
            'id_masyarakat' => 'required',
            'penawaran_harga' => 'required',
        ]);

        $history = [
            'id_lelang' => $request->id_lelang,
            'id_barang' => $request->id_barang,
            'id_masyarakat' => $request->id_masyarakat,
            'penawaran_harga' => $request->penawaran_harga,
        ];

        History::create($history);
        toast('Berhasil Melakukan Penawaran', 'success');
        return redirect('gallery/' . $request->id_lelang);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lelang = Lelang::where('lelang.id', $id)
            ->join('barang', 'barang.id', '=', 'lelang.id_barang')
            // ->leftJoin('history', 'history.id_lelang', '=', 'lelang.id')
            ->leftJoin('history', function ($join) {
                $join->on('lelang.id', '=', 'history.id_lelang')
                    ->whereRaw('history.penawaran_harga = (SELECT MAX(penawaran_harga) FROM history WHERE id_lelang = lelang.id)');
            })
            ->select('lelang.id', 'lelang.created_at', 'lelang.id_barang', 'lelang.id_masyarakat', 'lelang.status', 'barang.id', 'barang.nama_barang', 'barang.harga_awal', 'barang.deskripsi_barang', 'barang.foto', 'history.penawaran_harga')
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

        return view('gallery.detail')->with([
            'lelang' => $lelang,
            'title' => 'Pojok Lelang | Detail Lelang'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
