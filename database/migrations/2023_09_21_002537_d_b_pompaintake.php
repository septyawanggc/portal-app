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
        Schema::create('pompaintake', function (Blueprint $table) {
            $table->id('id');
            $table->enum('Equipment',['Pompa1','Pompa2','Pompa3']);
            $table->date('Tanggal');
            $table->enum('Bulan',['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']);
            $table->enum('Status',['Running','Standby','UnderMT']);
            $table->string('DEVP',10);
            $table->string('DEHP',10);
            $table->string('DEAP',10);
            $table->string('DEPTemp',20);
            $table->string('NDEVP',10);
            $table->string('NDEHP',10);
            $table->string('NDEAP',10);
            $table->string('NDEPTemp',10);
            $table->enum('MechP',['NOK/Rembes','OK/TidakRembes']);
            $table->string('PressP',10);
            $table->string('DEVM',10);
            $table->string('DEHM',10);
            $table->string('DEAM',10);
            $table->string('DEMTemp',20);
            $table->string('NDEVM',10);
            $table->string('NDEHM',10);
            $table->string('NDEAM',10);
            $table->string('NDEMTemp',20);
            $table->string('FreqM',20);
            $table->string('Current',10);
            $table->string('RMP',10);
            $table->text('Keterangan');
            $table->string('Oleh',20);
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
