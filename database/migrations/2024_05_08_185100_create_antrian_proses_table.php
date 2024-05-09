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
        Schema::create('antrian_proses', function (Blueprint $table) {
            $table->id();
            $table->string('kode_antrian');
            $table->string('no_antrian');
            $table->string('id_teller')->nullable();
            $table->string('id_cs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antrian_proses');
    }
};
