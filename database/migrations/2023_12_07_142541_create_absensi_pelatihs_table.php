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
        // Schema::create('t_absensi_pelatih', function (Blueprint $table) {
        //     $table->unsignedBigInteger('id_absensi_pelatih');
        //     $table->primary('id_absensi_pelatih');
        //     $table->
        //     $table->datetime('waktu_absen');
        //     $table->string('hasil');
        //     $table->string('status');
        //     $table->string('keterangan');
        //     $table->timestamps();

            
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi_pelatihs');
    }
};
