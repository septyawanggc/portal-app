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
        Schema::create('form_turbid', function (Blueprint $table) {
            $table->id('id');
            $table->string('Kode')->unique();
            $table->string('Equipment');
            $table->string('Range1');
            $table->string('Standar1');
            $table->string('Hasil1');
            $table->string('Range2')->nullable();
            $table->string('Standar2')->nullable();
            $table->string('Hasil2')->nullable();
            $table->date('Tanggal');
            $table->string('Keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_turbid');
    }
};
