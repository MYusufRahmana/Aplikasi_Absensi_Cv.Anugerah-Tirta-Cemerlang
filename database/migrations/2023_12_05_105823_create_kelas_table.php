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
        // Schema::create('kelas', function (Blueprint $table) {
        //     $table->unsignedInteger('id_kelas');
        //     $table->primary('id_kelas');
        //     $table->string('nama_kelas');
        //     $table->integer('gaji_pelatih');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};