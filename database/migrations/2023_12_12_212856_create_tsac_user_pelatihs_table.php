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
        Schema::create('tsac_user_pelatih', function (Blueprint $table) {
            $table->primary('id');
            $table->unsignedBigInteger('id');
            $table->string('email');
            $table->string('password');
            $table->enum("Akses",["Superadmin","Admin","Atlit","Pelatih"]);
            $table->unsignedBigInteger('kode_pelatih');
            $table->string('nama');
            $table->enum('jenis_kelamin',['Laki-laki','Perempuan']);
            $table->string('alamat');
            $table->string('no_hp');
            $table->enum('status',['Aktif','Non-Aktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tsac_user_pelatihs');
    }
};
