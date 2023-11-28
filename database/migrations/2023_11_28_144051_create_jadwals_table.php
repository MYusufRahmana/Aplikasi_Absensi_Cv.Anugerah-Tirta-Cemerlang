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
        Schema::create('t_jadwal', function (Blueprint $table) {
            $table->string('Id_Jadwal');
            $table->primary('Id_Jadwal');
            $table->date('Tanggal');
            $table->date('Waktu');
            $table->date('Waktu_Selesai');
            $table->string('Kode_Pelatih');
            $table->string('UKM');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
