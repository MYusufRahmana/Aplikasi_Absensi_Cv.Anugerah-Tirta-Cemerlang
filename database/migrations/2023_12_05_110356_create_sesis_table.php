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
        // Schema::create('sesi', function (Blueprint $table) {
        //     $table->unsignedBigInteger('id_sesi');
        //     $table->primary('id_sesi');
        //     $table->unsignedBigInteger('user_id');
        //     $table->foreign('user_id')->references('no')->on('registers')->onDelete('cascade');
        //     $table->unsignedInteger('id_kelas');
        //     $table->foreign('id_kelas')->references('id_kelas')->on('kelas')->onDelete('cascade');
        //     $table->integer('batas_jadwal');
        //     $table->timestamps();
           
           
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sesis');
    }
};
