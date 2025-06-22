<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SejarahSekolah extends Model
{
    protected $fillable = [
        'tahun_berdiri',
        'bentuk_sekolah',
        'status_sekolah',
        'sk_ban',
        'tgl_sk_ban',
        'waktu_penyelenggaraan',
        'sk_izin',
        'tgl_sk_izin',
        'surat_pengukuhan',
        'tgl_surat_pengukuhan',
        'nss',
        'nds',
        'npsn',
    ];
}
