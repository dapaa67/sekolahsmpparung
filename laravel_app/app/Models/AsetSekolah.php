<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsetSekolah extends Model
{
    protected $fillable = [
        'status_kepemilikan_tanah',
        'luas_tanah',
        'luas_bangunan',
        'luas_parkir',
        'luas_lapangan',
        'luas_lainnya',
        'sertifikat_tanah',
        'status_kepemilikan_gedung',
        'total_luas_gedung',
    ];
}
