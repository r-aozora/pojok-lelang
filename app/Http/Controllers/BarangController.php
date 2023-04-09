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
            $barang = barang::where('id_barang', 'like', "%$katakunci%")
                ->orWhere('nama_barang', 'like', "%$katakunci%")
                ->orWhere('create_at', 'like', "%$katakunci%")
                ->orWhere('harga_awal', 'like', "%$katakunci%")
                ->paginate(10);
        } else {
            $barang = barang::orderBy('id_barang', 'desc')->paginate(10);
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
        Session::flash('id_barang', $request->id_barang);
        Session::flash('nama_barang', $request->nama_barang);
        Session::flash('harga_awal', $request->harga_awal);
        Session::flash('deskripsi_barang', $request->deskripsi_barang);

        $request->validate([
            'id_barang' => 'required|numeric|unique:barang,id',
            'nama_barang' => 'required',
            'harga_awal' => 'required|numeric',
            'deskripsi_barang' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,png'
        ], [
            'id_barang.required' => 'ID harus diisi',
            'id_barang.numeric' => 'ID harus dalam angka',
            'id_barang.unique' => 'ID sudah ada',
            'nama_barang.required' => 'Nama harus diisi',
            'harga_awal.required' => 'Harga Awal harus diisi',
            'harga_awal.numeric' => 'Harga Awal harus dalam angka',
            'deskripsi_barang.required' => 'Deskripsi barang harus diisi',
            'foto.required' => 'Foto harus diisi',
            'foto.mimes' => 'Foto harus berformat PNG, JPG, atau JPEG'
        ]);

        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis').'.'.$foto_ekstensi;
        $foto_file->move(public_path('img/barang'), $foto_nama);

        $barang = [
            'id_barang' => $request->id_barang,
            'nama_barang' => $request->nama_barang,
            'harga_awal' => $request->harga_awal,
            'deskripsi_barang' => $request->deskripsi_barang,
            'foto' => $foto_nama,
        ];

        barang::create($barang);
        return redirect('barang')->with('success', 'Data Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = barang::where('id_barang', $id)->first();
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
        $barang = barang::where('id_barang', $id)->first();

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
        ], [
            'nama_barang.required' => 'Nama Barang harus diisi',
            'harga_awal.required' => 'Harga Awal harus diisi',
            'harga_awal.numeric' => 'Harga Awal harus angka',
            'deskripsi_barang.required' => 'Deskripsi barang harus diisi',
        ]);

        $barang = [
            'nama' => $request->nama,
            'harga_awal' => $request->harga_awal,
            'deskripsi_barang' => $request->deskripsi_barang,
        ];

        if($request->hasFile('foto')){
            $request->validate([
                'foto'=>'mimes:jpeg,jpg,png'
            ], [
                'foto.mimes'=>'Foto harus .PNG, .JPG, atau .JPEG'
            ]);

            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis').'.'.$foto_ekstensi;
            $foto_file->move(public_path('foto'), $foto_nama);

            $foto_barang = barang::where('id_barang', $id)->first();
            File::delete(public_path('img/barang').'/'.$foto_barang->foto);

            $barang['foto'] = $foto_nama;
        }

        barang::where('id_barang', $id)->update($barang);
        return redirect('barang')->with('success', 'Data Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = barang::where('id_barang', $id)->first();
        File::delete(public_path('img/barang').'/'.$barang->foto);
        barang::where('id_barang', $id)->delete();
        return redirect('barang')->with('success', 'Data Dihapus');
    }
}
