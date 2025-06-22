<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;

    // Daftar kolom yang boleh diisi secara massal
    protected $fillable = [
        'judul',
        'tanggal',
        'gambar',
        'siswa',
        'kelas',
        'skala',
        'deskripsi',
    ];
}

