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
        Schema::create('registers', function (Blueprint $table) {
            $table->bigIncrements('no');
            $table->string('Nama');
            $table->string('Gender');
            $table->string('Sekolah');
            $table->string('Health');
            $table->date('Tgl');
            $table->string('Kelas');
            $table->string('Ortu');
            $table->string('Alamat');
            $table->string('Hp');
            $table->string('email');
            $table->string('gbr');
            $table->timestamps();
            $table->string('password');
            $table->integer('status');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};
