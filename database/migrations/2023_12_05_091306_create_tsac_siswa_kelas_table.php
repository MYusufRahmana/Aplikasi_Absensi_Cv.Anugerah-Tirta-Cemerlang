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
        Schema::create('kelas', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->primary('id');
            $table->unsignedBigInteger('id_siswa');
            $table->unsignedBigInteger('id_kelas');
            $table->Integer('biaya');
            $table->Integer('biaya_registrasi');
            $table->Integer('masa');
            $table->Integer('satuan_masa');
            $table->dateTime('tgl_checkout');
            $table->dateTime('tgl_mulai');
            $table->integer('status');
            $table->integer('autodebit');
            $table->timestamps();
            $table->integer('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tsac_siswa_kelas');
    }
};
