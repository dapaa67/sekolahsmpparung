<?php
namespace App\Http\Controllers;

use App\Models\IdentitasSekolah;
use App\Models\SejarahSekolah;
use App\Models\KepalaSekolah;
use App\Models\StrukturOrganisasi;

class ProfilSekolahController extends Controller
{
    public function index()
    {
        $identitas = IdentitasSekolah::first();
        $sejarah = SejarahSekolah::first();
        $kepalaSekolahs = KepalaSekolah::orderByDesc('periode')->get();

        return view('profil', compact('identitas', 'sejarah', 'kepalaSekolahs'));
    }

    public function struktur()
    {
        $struktur = StrukturOrganisasi::first();
        return view('struktur', compact('struktur'));
    }
}
