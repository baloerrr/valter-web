<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DaftarKegiatan;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatans';

    protected $fillable = ['nama_kegiatan', 'deskripsi', 'gambar'];

    public function daftarKegiatan()
    {
        $this->hasMany(DaftarKegiatan::class);
    }
}
