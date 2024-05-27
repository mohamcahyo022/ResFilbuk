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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('penulis');
            $table->string('poster');
            $table->string('trailer');
            $table->string('genre');
            $table->string('sutradara');
            $table->integer('durasi');
            $table->integer('rilis');
            $table->string('aktor');
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
        Schema::dropIfExists('films');
    }
};
