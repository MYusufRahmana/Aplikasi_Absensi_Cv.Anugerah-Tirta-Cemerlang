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
        Schema::create('tsac_sub_kelas', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->primary('id');
            $table->integer('id_kelas');
            $table->string('nama');
            $table->string('deskripsi');
            $table->integer('biaya');
            $table->string('biaya_durasi');
            $table->integer('biaya_registrasi');
            $table->integer('status');
            $table->integer('baru');
            $table->integer('kapasitas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tsac_sub_kelas');
    }
};
