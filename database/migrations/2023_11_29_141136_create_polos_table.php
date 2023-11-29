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
        Schema::create('t_polo_user', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->string('username');
            $table->string('Nama');
            $table->string('password');
            $table->string('password_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('polos');
    }
};
