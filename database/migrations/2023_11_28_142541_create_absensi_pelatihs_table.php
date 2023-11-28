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
        Schema::create('t_absensi_pelatih', function (Blueprint $table) {
            $table->string('Id_Absen');
            $table->primary('Id_Absen');
            $table->date('Tanggal');
            $table->time('Waktu');
            $table->string('Pelatih');
            $table->string('Jumlah_Peserta');
            $table->string('Keterangan');
            $table->string('File1');
            $table->string('File2');
            $table->string('Pengajar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi_pelatihs');
    }
};
