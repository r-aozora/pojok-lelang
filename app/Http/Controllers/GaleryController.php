<?php

namespace App\Http\Controllers;

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
            ->select('lelang.id', 'lelang.created_at', 'lelang.harga_akhir', 'barang.nama_barang', 'barang.harga_awal', 'barang.foto')
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lelang = Lelang::where('lelang.id', $id)
            ->join('barang', 'barang.id', '=', 'lelang.id_barang')
            ->select('lelang.id', 'lelang.created_at', 'lelang.harga_tawar', 'lelang.id_barang', 'lelang.id_masyarakat', 'barang.nama_barang', 'barang.harga_awal', 'barang.deskripsi_barang', 'barang.foto')
            ->first();

        return view('gallery.edit')->with([
            'lelang' => $lelang,
            'title' => 'Pojok Lelang | Detail Lelang'
        ]);
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
        $request->validate([
            'harga_tawar' => 'required',
            'id_masyarakat'
        ]);

        $lelang = [
            'harga_tawar' => $request->harga_tawar,
            'id_masyarakat' => $request->id_masyarakat,
        ];

        lelang::where('id', $id)->update($lelang);
        toast('Berhasil Melakukan Penawaran', 'success');
        return view('gallery.edit');
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
