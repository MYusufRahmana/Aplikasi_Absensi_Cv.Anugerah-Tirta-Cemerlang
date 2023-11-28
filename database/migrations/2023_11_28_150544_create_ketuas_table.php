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
        Schema::create('t_ketua_ukm', function (Blueprint $table) {
            $table->string('Id_Ketua');
            $table->primary('Id_Ketua');
            $table->string('NPM');
            $table->string('Nama');
            $table->string('HP');
            $table->string('Email');
            $table->string('ID_UKM');
            $table->enum('Sebagai', ['Ketua', 'Sekretaris','Bendahara']);
            $table->string('Tahun');
            $table->enum('Semester', ['Ganjil', 'Genap']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ketuas');
    }
};
