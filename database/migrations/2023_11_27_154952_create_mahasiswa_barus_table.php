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
        Schema::create('tbmahasiswabaru', function (Blueprint $table) {
            $table->id();
            $table->primary('id_');
            // `id_pendaftar` varchar(5) NOT NULL,
            // `nama` varchar(30) NOT NULL,
            // `ttl` varchar(50) NOT NULL,
            // `alamat` text NOT NULL,
            // `kota` varchar(20) NOT NULL,
            // `telp` varchar(12) NOT NULL,
            // `kdpos` varchar(5) NOT NULL,
            // `Handphone` varchar(13) NOT NULL,
            // `prodi` varchar(2) NOT NULL,
            // `ttd` longtext NOT NULL,
            // `nm_saksi1` longtext NOT NULL,
            // `ttd_saksi1` longtext NOT NULL,
            // `nm_saksi2` longtext NOT NULL,
            // `ttd_saksi2` longtext NOT NULL,
            // `photo` longtext NOT NULL,
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa_barus');
    }
};
