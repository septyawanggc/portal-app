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
        Schema::create('pompadosing', function (Blueprint $table){
            $table->id('id');
            $table->enum('idalat',['1','2','3','4','5','6','7','8','9','10','11','12'])->nullable();
            $table->enum('Nama',['PACL1','PACL2','PACL3','PACL4','PACL5','PACLPost1','PACLPost2','Polymer1','Polymer2','Polymer3','Polymer4','Polymer5','SodaAsh1','SodaAsh2'])->nullable();
            $table->date('Tanggal')->unique()->nullable();
            $table->enum('Bulan',['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'])->default('Januari')->unique();
            $table->enum('Status',['Running','Standby','Onprogres','UnderMT'])->default('Standby');
            $table->string('Temp',255);
            $table->string('Leveloli',255);
            $table->string('Stroke',255);
            $table->enum('Nois',['Normal','TidakNormal']);
            $table->string('Keterangan',255)->nullable();
            $table->string('Oleh',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
