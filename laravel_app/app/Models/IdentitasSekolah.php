<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IdentitasSekolah extends Model
{
    // Nama tabel (jika tidak sesuai konvensi Laravel)
    protected $table = 'identitas_sekolahs';

    // Kolom-kolom yang boleh diisi
    protected $fillable = [
        'nama',
        'alamat',
        'telepon',
        'hp',
        'email',
        'logo',
    ];
}
