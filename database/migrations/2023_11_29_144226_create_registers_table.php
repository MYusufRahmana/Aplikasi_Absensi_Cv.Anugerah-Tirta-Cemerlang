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
        Schema::create('register', function (Blueprint $table) {
            $table->id('no');
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
            $table->string('password')->nullable();
            $table->string('status');
            $table->enum('role', ['member', 'pelatih', 'admin','superadmin']);

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
