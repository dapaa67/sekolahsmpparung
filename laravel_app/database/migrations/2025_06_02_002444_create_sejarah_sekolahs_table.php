<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sejarah_sekolahs', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_berdiri')->nullable();
            $table->string('bentuk_sekolah')->nullable();
            $table->string('status_sekolah')->nullable();
            $table->string('sk_ban')->nullable();
            $table->date('tgl_sk_ban')->nullable();
            $table->string('waktu_penyelenggaraan')->nullable();
            $table->string('sk_izin')->nullable();
            $table->date('tgl_sk_izin')->nullable();
            $table->string('surat_pengukuhan')->nullable();
            $table->date('tgl_surat_pengukuhan')->nullable();
            $table->string('nss')->nullable();
            $table->string('nds')->nullable();
            $table->string('npsn')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sejarah_sekolahs');
    }
};
