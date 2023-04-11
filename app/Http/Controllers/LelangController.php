<?php

namespace App\Http\Controllers;

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
            $lelang = lelang::where('id_lelang', 'like', "%$katakunci%")
                ->orWhere('created_at', 'like', "%$katakunci%")
                ->orWhere('status', 'like', "%$katakunci%")
                ->paginate(10);
        } else {
            $lelang = lelang::orderBy('id_lelang', 'desc')->paginate(10);
        }

        if(auth()->user()->level === 'Petugas' || auth()->user()->level === 'Administrator'){
            return view('lelang.index')->with([
                'lelang' => $lelang,
                'title' => 'Pojok Lelang | Aktivasi Lelang',
            ]);
        } elseif(auth()->user()->level === 'Masyarakat'){
            return view('lelang.masyarakat.galeri')->with([
                'lelang' => $lelang,
                'title' => 'Pojok Lelang | Galeri Lelang',
            ]);
        }
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
