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
            $table->string('id_pendaftar',5);
            $table->primary('id_pendaftar');
            $table->string('nama');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('kota');
            $table->string('tlp');
            $table->string('kdpos');
            $table->string('Handphone');
            $table->string('prodi');
            $table->string('ttd');
            $table->string('nm_saksi1');
            $table->string('ttd_saksi1');
            $table->string('nm_saksi2');
            $table->string('ttd_saksi2');
            $table->string('photo');
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
