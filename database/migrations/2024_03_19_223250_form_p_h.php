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
        Schema::create('formPH', function (Blueprint $table) {
            $table->id('id');
            $table->string('Kode')->unique();
            $table->string('Equipment');
            $table->enum('Range1',['0-9','0-12','0-7']);
            $table->enum('Standar1',['4','7']);
            $table->string('Hasil1');
            $table->enum('Range2',['0-9','0-12','0-7']);
            $table->enum('Standar2',['4','7']);
            $table->string('Hasil2');
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
        Schema::dropIfExists('formPH');
    }
};
