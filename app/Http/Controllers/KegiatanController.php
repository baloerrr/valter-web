<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KegiatanController extends Controller
{
    public function index()
    {
        return view(
            'user.index',
            [
                'kegiatans' => Kegiatan::all()
            ]
        );
    }

    public function show($slug)
    {
        $new_kegiatan = [];
        $kegiatans = Kegiatan::all();
        foreach ($kegiatans as $kegiatan) {
            if ($kegiatan['slug'] === $slug) {
                $new_kegiatan = $kegiatan;
            }
        }

        $user = Auth::user();
        return view(
            'user.kegiatanDetail',
            [
                'title' => 'Single Post',
                'kegiatan' => $new_kegiatan,
                'user' => $user
            ]
        );
    }
}
