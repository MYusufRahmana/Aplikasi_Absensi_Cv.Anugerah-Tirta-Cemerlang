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
        Schema::create('jadwal', function (Blueprint $table) {
            $table->unsignedBigInteger('id_jadwal');
            $table->primary('id_jadwal');
            $table->unsignedBigInteger('id_sesi');
            $table->unsignedInteger('kode_pelatih');
            $table->datetime('waktu_mulai');
            $table->datetime('waktu_selesai');
            $table->timestamps();

            // Kunci asing ke tabel register
            $table->foreign('id_sesi')->references('id_sesi')->on('sesi')->onDelete('cascade');
            $table->foreign('kode_pelatih')->references('kode_pelatih')->on('t_pelatih')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
