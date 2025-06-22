<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('principal_sections', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama Kepala Sekolah
            $table->string('position')->default('Kepala Sekolah');
            $table->string('image'); // Path gambar
            $table->text('greeting'); // Sambutan (bisa disimpan gabungan paragraf)
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('principal_sections');
    }
};
