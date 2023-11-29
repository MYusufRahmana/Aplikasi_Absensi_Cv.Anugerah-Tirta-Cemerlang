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
        Schema::create('tsac_siswa', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->integer('id_registrasi');
            $table->date('tgl_masuk');
            $table->string('status');
            $table->timestamp('validation_time');
            $table->string('validation_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
