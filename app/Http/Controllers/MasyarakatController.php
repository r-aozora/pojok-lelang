<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class MasyarakatController extends Controller
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
            $masyarakat = User::where('id', 'like', "%$katakunci%")
                ->orWhere('nama', 'like', "%$katakunci%")
                ->orWhere('username', 'like', "%$katakunci%")
                ->paginate(10);
        } else {
            $data = DB::table('users')->rightJoin('masyarakat', 'users.id', '=', 'masyarakat.telepon')->get();
            $masyarakat = User::where('level', 'Masyarakat')->orderBy('id', 'desc')->paginate(10);
        }

        return view('masyarakat.index')->with([
            'data' => $data,
            'masyarakat' => $masyarakat,
            'title' => 'Pojok Lelang | Data Masyarakat',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masyarakat.create')->with([
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

        $masyarakat = [
            'id' => $request->id,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => $request->level,
        ];

        User::create($masyarakat);
        return redirect('/masyarakat')->with('success', 'Data Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $masyarakat = User::where('id', $id)->first();

        return view('masyarakat.detail')->with([
            'masyarakat' => $masyarakat,
            'title' => 'Pojok Lelang | Detail Masyarakat',
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
        $masyarakat = User::where('id', $id)->first();

        return view('masyarakat.edit')->with([
            'masyarakat' => $masyarakat,
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

        $masyarakat = [
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'level' => $request->input('level'),
        ];

        User::where('id', $id)->update($masyarakat);
        return redirect('masyarakat')->with('success', 'Data Diperbarui');
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
        
        return redirect('masyarakat')->with('success', 'Data Dihapus');
    }
}
?>
