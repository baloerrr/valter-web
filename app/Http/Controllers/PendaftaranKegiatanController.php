<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PendaftaranKegiatanController extends Controller
{
    public function store(Request $request, $slug, String $id)
    {

        $request->validate([
            'nama_lengkap' => 'required|string',
            'asal_instansi' => 'required|string',
            'jenis_kegiatan' => 'required|string',
        ]);

        $user = User::findOrFail($id);

        $user->nama_lengkap = $request->nama_lengkap;
        $user->asal_instansi = $request->asal_instansi;
        $user->jenis_kegiatan = $request->jenis_kegiatan;
        $user->save();



        return redirect()->route('kegiatanDetail', ['slug' => $slug]);
    }
}
