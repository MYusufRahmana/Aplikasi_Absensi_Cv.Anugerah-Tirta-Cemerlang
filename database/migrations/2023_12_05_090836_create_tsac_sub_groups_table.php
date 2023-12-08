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
        Schema::create('tsac_sub_group', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->primary('id');
            $table->unsignedBigInteger('id_kelas');
            $table->unsignedBigInteger('jumlah_siswa');
            $table->unsignedBigInteger('trainer');
            $table->dateTime('jadwal');
            $table->dateTime('tgl_buat');
            $table->dateTime('dibuat_oleh');
            $table->timestamps();

            $table->foreign('id_kelas')->references('id')->on('tsac_kelas_buka')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tsac_sub_groups');
    }
};
