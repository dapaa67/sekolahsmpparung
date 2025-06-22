<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\KepalaSekolah;
use App\Models\IdentitasSekolah;
use App\Models\SejarahSekolah;
use App\Models\StrukturOrganisasi;

class DummySekolahSeeder extends Seeder
{
    public function run(): void
    {
        // Pastikan direktori storage/app/public ada file gambar dummy
        $this->copyDummyImage('kepsek.jpg');
        $this->copyDummyImage('logo.png');
        $this->copyDummyImage('struktur.png');

        KepalaSekolah::create([
            'nama' => 'Drs. Bambang Supriyadi',
            'periode' => '2020 - 2024',
            'image' => 'kepsek.jpg',
        ]);

        IdentitasSekolah::create([
            'nama' => 'SMP Islam Parung',
            'alamat' => 'Jl. Pendidikan No. 123, Parung, Bogor',
            'telepon' => '(0251) 123456',
            'hp' => '081234567890',
            'email' => 'info@smpislamparung.sch.id',
            'logo' => 'logo.png',
        ]);

        SejarahSekolah::create([
            'tahun_berdiri' => '2005',
            'bentuk_sekolah' => 'SMP',
            'status_sekolah' => 'Swasta',
            'sk_ban' => '123/XXI/2020',
            'tgl_sk_ban' => '2020-06-01',
            'waktu_penyelenggaraan' => 'Pagi',
            'sk_izin' => 'SK-IZIN-456',
            'tgl_sk_izin' => '2005-01-01',
            'surat_pengukuhan' => 'SP-789/2020',
            'tgl_surat_pengukuhan' => '2020-01-15',
            'nss' => '1010101010',
            'nds' => '2020202020',
            'npsn' => '3030303030',
        ]);

        StrukturOrganisasi::create([
            'gambar' => 'struktur.png',
        ]);

        $this->command->info('✅ Dummy data sekolah berhasil dibuat.');
    }

    private function copyDummyImage(string $filename)
    {
        $source = base_path('resources/dummy/' . $filename);
        $target = storage_path('app/public/' . $filename);

        if (!file_exists($target) && file_exists($source)) {
            File::copy($source, $target);
        }
    }
}
