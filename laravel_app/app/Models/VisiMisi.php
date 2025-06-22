<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    protected $table = 'visi_misi';

    protected $fillable = [
        'visi',
        'indikator_visi',
        'misi',
        'daftar_misi',
        'gambar_visi',
        'gambar_misi',
    ];

    protected $casts = [
        'indikator_visi' => 'array',
        'daftar_misi' => 'array',
    ];
}
