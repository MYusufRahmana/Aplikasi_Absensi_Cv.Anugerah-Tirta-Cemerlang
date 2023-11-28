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
        Schema::create('t_bendahara_ukm', function (Blueprint $table) {
            $table->string('Id_Bendahara');
            $table->primary('Id_Bendahara');
            $table->string('NPM');
            $table->string('Nama');
            $table->string('HP');
            $table->string('Email');
            $table->string('ID_UKM');
            $table->string('Tahun');
            $table->enum('Semester', ['Ganjil', 'Genap']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bendaharas');
    }
};
