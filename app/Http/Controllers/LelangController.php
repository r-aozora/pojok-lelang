<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\History;
use App\Models\lelang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            $lelang = lelang::join('barang', 'barang.id', '=', 'lelang.id_barang')
                ->leftJoin('users', 'users.id', '=', 'lelang.id_masyarakat')
                ->leftJoin('history', function ($join) {
                    $join->on('lelang.id', '=', 'history.id_lelang')
                        ->whereRaw('history.penawaran_harga = (SELECT MAX(penawaran_harga) FROM history WHERE id_lelang = lelang.id)');
                })
                ->select('barang.nama_barang', 'barang.harga_awal', 'lelang.id', 'lelang.created_at', 'users.nama', 'lelang.harga_akhir', 'lelang.status', 'history.penawaran_harga')
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
                ->orderBy('id', 'desc')
                ->paginate(10);
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
        $request->validate([
            'id_barang' => 'required',
            'id_petugas',
        ]);

        $lelang = [
            'id_barang' => $request->id_barang,
            'id_petugas' => $request->id_petugas,
            // $request->id_petugas,
        ];

        lelang::create($lelang);
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
        $lelang = lelang::where('id', $id)->first();

        $harga_akhir = History::where('id_lelang', $id)
            ->max('penawaran_harga');

        $lelang->harga_akhir = $harga_akhir;
        $lelang->id_masyarakat = History::where('id_lelang', $id)
            ->where('penawaran_harga', $harga_akhir)
            ->value('id_masyarakat');

        return view('lelang.edit')->with([
            'lelang' => $lelang,
            'title' => 'Pojok Lelang | Tambah Lelang'
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
        if (lelang::where('status', 'Dibuka')->exists()) {
            $request->validate([
                'id_masyarakat',
                'harga_akhir',
                'status' => 'required',
            ]);

            $lelang = [
                'id_masyarakat' => $request->id_masyarakat,
                'harga_akhir' => $request->harga_akhir,
                'status' => $request->status,
            ];
        } elseif (lelang::where('status', '0')->orWhere('status', 'Ditutup')->exists()) {
            $request->validate([
                'status' => 'required',
            ]);

            $lelang = [
                'status' => $request->status,
            ];
        }

        lelang::where('id', $id)->update($lelang);
        if (lelang::where('status', 'Dibuka')->exists()) {
            toast('Lelang Berhasil Ditutup', 'success');
        } elseif (lelang::where('status', '0')->orWhere('status', 'Ditutup')->exists()) {
            toast('Lelang Dibuka', 'success');
        }
        return redirect('/lelang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        lelang::where('id', $id)->delete();
        toast('Data Dihapus', 'success');
        return redirect('/lelang');
    }
}
