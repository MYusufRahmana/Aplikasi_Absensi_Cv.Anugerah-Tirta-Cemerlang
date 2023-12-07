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
        Schema::create('t_pelatih', function (Blueprint $table) {
            $table->unsignedBigInteger('kode_pelatih');
            $table->primary('kode_pelatih');
            $table->string('Nama_Pelatih');
            $table->string('HP');
            $table->string('Telp');
            $table->string('Email');
            $table->string('Alamat');
            $table->string('Username');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelatihs');
    }
};
