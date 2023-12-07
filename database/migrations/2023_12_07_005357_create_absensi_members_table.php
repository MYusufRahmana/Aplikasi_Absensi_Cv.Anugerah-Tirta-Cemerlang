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
        // Schema::create('absensi_member', function (Blueprint $table) {
        //     $table->unsignedBigInteger('id_absensi_member');
        //     $table->primary('id_absensi_member');
        //     $table->integer('id_jadwal');
        //     $table->datetime('waktu_absen');
        //     $table->string('hasil_scan');
        //     $table->string('status_scan');
        //     $table->string('keterangan');
        //     $table->timestamps();

        //     $table->foreign('id_jadwal')->references('id_jadwal')->on('jadwal')->onDelete('cascade');
            
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi_members');
    }
};
