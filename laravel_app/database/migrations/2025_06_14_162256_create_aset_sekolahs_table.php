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
        Schema::create('aset_sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('status_kepemilikan_tanah');
            $table->integer('luas_tanah');
            $table->integer('luas_bangunan');
            $table->integer('luas_parkir');
            $table->integer('luas_lapangan');
            $table->integer('luas_lainnya');
            $table->string('sertifikat_tanah');
            $table->string('status_kepemilikan_gedung');
            $table->integer('total_luas_gedung');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aset_sekolahs');
    }
};
