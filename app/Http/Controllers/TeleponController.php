<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TeleponController extends Controller
{
    public function telepon(Request $request)
    {
        Session::flash('telepon', $request->telepon);

        $request->validate([
            'telepon' => 'required',
            // 'user_id' => 'required',
        ]);

        Masyarakat::create($request->all());

        toast('Telepon Ditambahkan','success');
        return redirect()->back();
    }
}
