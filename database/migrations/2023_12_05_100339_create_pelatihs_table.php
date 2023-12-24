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
            $table->id();
            $table->string('Nama_Pelatih');
            $table->string('Hp');
            $table->string('Email');
            $table->string('kelas');
            $table->string('password');
            $table->string('Alamat');
            $table->enum('role', ['member', 'pelatih', 'admin']);
            $table->string('status');
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
