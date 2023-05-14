<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class petugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $level = ['Administrator', 'Petugas']; 
        if (strlen($katakunci)) {
            $petugas = User::where('id', 'like', "%$katakunci%")
                ->orWhere('nama', 'like', "%$katakunci%")
                ->orWhere('username', 'like', "%$katakunci%")
                ->orWhere('level', 'like', "%$katakunci%")
                ->paginate(10);
        } else {
            $petugas = User::where('level', $level[0])->orWhere('level', $level[1])->orderBy('id', 'desc')->paginate(10);
        }

        return view('petugas.index')->with([
            'petugas' => $petugas,
            'title' => 'Pojok Lelang | Data Petugas',
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugas.create')->with([
            'title' => 'Pojok Lelang | Tambah Data',
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
        Session::flash('nama', $request->nama);
        Session::flash('username', $request->username);
        Session::flash('level', $request->level);

        $request->validate([
            'id' => 'required|numeric|unique:users,id',
            'nama' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'level' => 'required',
        ]);

        $petugas = [
            'id' => $request->id,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => $request->level,
        ];
        User::create($petugas);
        toast('Data Ditambahkan','success');
        return redirect('petugas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $petugas = User::where('id', $id)->first();
        return view('petugas.detail')->with([
            'petugas' => $petugas,
            'title' => 'Pojok Lelang | Detail Petugas',
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
        $petugas = User::where('id', $id)->first();

        return view('petugas.edit')->with([
            'petugas' => $petugas,
            'title' => 'Pojok Lelang | Edit Data'
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
            'nama' => 'required',
            'username' => 'required',
            'level' => 'required',
        ]);

        $petugas = [
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'level' => $request->input('level'),
        ];

        User::where('id', $id)->update($petugas);
        toast('Data Diperbarui','success');
        return redirect('/petugas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        toast('Data Dihapus','success');
        return redirect('/petugas');
    }
}
?>
