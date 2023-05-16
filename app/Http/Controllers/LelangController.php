<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\lelang;
use Illuminate\Http\Request;

class LelangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;

        if (strlen($katakunci)) {
            $lelang = lelang::where('id', 'like', "%$katakunci%")
                ->orWhere('created_at', 'like', "%$katakunci%")
                ->orWhere('status', 'like', "%$katakunci%")
                ->paginate(10);
        } else {
            $lelang = lelang::orderBy('id', 'desc')->paginate(10);
        }

        return view('lelang.index')->with([
            'lelang' => $lelang,
            'title' => 'Pojok Lelang | Aktivasi Lelang',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $lelang = lelang::join('barang', 'barang.id', '=', 'lelang.id_barang')
        //     ->select('barang.id', 'barang.nama_barang', 'barang.harga_awal', 'barang.foto')
        //     ->get();

        $barang = Barang::all();

        return view('lelang.create')->with([
            'barang' => $barang,
            'title' => 'Pojok Lelang | Tambah Lelang'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $barang = Barang::all();
        // // $barang = lelang::join('barang', 'barang.id', '=', 'lelang.id_barang')
        // //     ->select('barang.harga_awal')
        // //     ->get();

        $request->validate([
            'id_barang' => 'required',
            'id_petugas',
            'harga_akhir' => 'exists:barang,harga_awal',
        ]);

        // $lelang = [
        //     'id_barang' => $request->id_barang,
        //     'id_petugas' => $request->id_petugas,
        //     'harga_akhir' => $barang->harga_akhir,
        // ];

        $lelang = new lelang();
        $lelang->id_barang = $request->input('id_barang');
        $lelang->id_petugas = $request->input('id_petugas');
        $lelang->harga_akhir = $request->input('harga_akhir');
        $lelang->id_masyarakat = null;
        $lelang->save();

        // lelang::create($lelang);
        toast('Lelang Ditambahkan', 'success');
        return redirect('/lelang');
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
