<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('absen', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->unsignedBigInteger('user_id');
            $table->date('tanggal_absen');
            $table->datetime('waktu_scan')->nullable();
            $table->string('hasil_scan', 255);
            $table->text('keterangan')->nullable();
            $table->timestamps();

            // Kunci asing ke tabel register
            $table->foreign('user_id')->references('no')->on('registers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absens');
    }
};
