<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class BarangController extends Controller
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
            $barang = barang::where('id', 'like', "%$katakunci%")
                ->orWhere('nama_barang', 'like', "%$katakunci%")
                ->orWhere('created_at', 'like', "%$katakunci%")
                ->orWhere('harga_awal', 'like', "%$katakunci%")
                ->paginate(10);
        } else {
            $barang = barang::orderBy('id', 'desc')->paginate(10);
        }
        return view('barang.index')->with([
            'barang' => $barang,
            'title' => 'Pojok Lelang | Data Barang',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create')->with([
            'title' => 'Pojok Lelang | Tambah Data Barang',
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
        Session::flash('id', $request->id);
        Session::flash('nama_barang', $request->nama_barang);
        Session::flash('harga_awal', $request->harga_awal);

        $request->validate([
            'id' => 'required|numeric|unique:barang,id',
            'nama_barang' => 'required',
            'harga_awal' => 'required|numeric',
            'foto' => 'required|mimes:jpeg,jpg,png,gif'
        ]);

        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . '.' . $foto_ekstensi;
        $foto_file->move(public_path('img/barang'), $foto_nama);

        $barang = [
            'id' => $request->id,
            'nama_barang' => $request->nama_barang,
            'harga_awal' => $request->harga_awal,
            'deskripsi_barang' => $request->deskripsi_barang,
            'foto' => $foto_nama,
        ];

        Barang::create($barang);
        toast('Data Ditambahkan', 'success');
        return redirect('barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::where('id', $id)->first();

        return view('barang.detail')->with([
            'barang' => $barang,
            'title' => 'Pojok Lelang | Detail Barang',
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
        $barang = barang::where('id', $id)->first();

        return view('barang.edit')->with([
            'barang' => $barang,
            'title' => 'Pojok Lelang | Edit Data Barang'
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
            'nama_barang' => 'required',
            'harga_awal' => 'required|numeric',
            'deskripsi_barang' => 'required',
        ]);

        $barang = [
            'nama_barang' => $request->input('nama_barang'),
            'harga_awal' => $request->input('harga_awal'),
            'deskripsi_barang' => $request->input('deskripsi_barang'),
        ];

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'mimes:jpeg,jpg,png,gif'
            ]);

            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . '.' . $foto_ekstensi;
            $foto_file->move(public_path('img/barang'), $foto_nama);

            $foto_barang = Barang::where('id', $id)->first();
            File::delete(public_path('img/barang') . '/' . $foto_barang->foto);

            $barang['foto'] = $foto_nama;
        }

        Barang::where('id', $id)->update($barang);
        toast('Data Diperbarui', 'success');
        return redirect('barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::where('id', $id)->first();
        File::delete(public_path('img/barang') . '/' . $barang->foto);

        Barang::where('id', $id)->delete();
        toast('Data Dihapus', 'success');
        return redirect('barang');
    }
}
