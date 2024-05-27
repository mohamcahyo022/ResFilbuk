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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('penulis');
            $table->string('cover');
            $table->string('jenis');
            $table->string('penulis_buku');
            $table->string('penerbit');
            $table->integer('rilis');
            $table->integer('halaman');
            $table->text('orientasi');
            $table->text('sinopsis');
            $table->text('analisis');
            $table->text('evaluasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
