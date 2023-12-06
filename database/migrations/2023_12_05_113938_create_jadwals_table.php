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
        Schema::create('jadwal', function (Blueprint $table) {
            $table->integer('id_jadwal');
            $table->primary('id_jadwal');
            $table->unsignedBigInteger('id_sesi');
            $table->unsignedBigInteger('kode_pelatih');
            $table->datetime('waktu_mulai');
            $table->datetime('waktu_selesai');
            $table->timestamps();

            // Kunci asing ke tabel register
            $table->foreign('id_sesi')->references('id_sesi')->on('sesis')->onDelete('cascade');
            $table->foreign('kode_pelatih')->references('t_pelatih')->on('pelatihs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absens');
    }
};
