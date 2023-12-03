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
        Schema::create('inputpermit', function (Blueprint $table) {
            $table->id('id');
            $table->string('nopermit');
            $table->date('tanggal');
            $table->string('divisi');
            $table->string('nama');
            $table->foreignId('kode')->unique();
            $table->string('type')->nullable();
            $table->string('jumlah');
            $table->enum('satuan',['Pcs','Pack','Batang','Meter','Dosen','Liter','KG','Kaleng','Pail'])->nullable();
            $table->string('keperluan')->nullable();
            $table->longText('keterangan')->nullable();
            $table->string('diajukan')->nullable();
            $table->string('diperiksa')->nullable();
            $table->string('dikeluarkan')->nullable();
            $table->enum('status',['Created','Aprroved','Rejected']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inputpermit');
    }
};
