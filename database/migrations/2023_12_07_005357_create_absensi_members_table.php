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
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('no')->on('registers')->onDelete('cascade');
            $table->string('kelas');
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
