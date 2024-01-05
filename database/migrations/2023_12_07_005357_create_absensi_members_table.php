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
        Schema::create('absensi_member', function (Blueprint $table) {
            $table->increments('id_absensi_member');
            $table->foreignId('id_user');
            $table->foreign('id_user')->references('no')->on('register')->onDelete('cascade');
            $table->foreignId('id_kelas_member');
            $table->foreign('id_kelas_member')->references('id')->on('kelas_member');
            $table->datetime('waktu_absen');
            $table->string('status');
            $table->timestamps();

            // Kunci asing ke tabel register
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi_members');
    }
};
