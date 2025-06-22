<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'tanggal', 'isi', 'excerpt', 'gambar', 'slug'];

    protected static function booted()
    {
        static::creating(function ($berita) {
            $berita->slug = Str::slug($berita->judul . '-' . uniqid());
        });

        static::updating(function ($berita) {
            // Optional: hanya update slug kalau judul berubah
            if ($berita->isDirty('judul')) {
                $berita->slug = Str::slug($berita->judul . '-' . uniqid());
            }
        });
    }


}
