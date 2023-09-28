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
        Schema::create('laporankerusakan', function (Blueprint $table){
            $table->id('id');
            $table->string('no-lk',255)->unique()->nullable();
            $table->string('nama',255)->nullable();
            $table->time('day',$precision = 0);
            $table->date('tanggal')->nullable();
            $table->string('alat',255)->nullable();
            $table->string('pid',255)->nullable();
            $table->string('bangunan',255)->nullable();
            $table->string('analisa',255)->nullable();
            $table->string('action',255)->nullable();
            $table->string('kerusakan',255)->nullable();
            $table->string('operator',255)->nullable();
            $table->string('diperiksa',255)->nullable();
            $table->enum('status-laporan',['Lk ini berhubungan dengan proses produksi dan ada kerusakan/kelainan setelah pengecekan dilapangan','Lk tidak berhubungan dengan proses produksi','LK Tidak ada kelainan/kerusakan setelah pengecekan',])->default('Lk tidak berhubungan dengan proses produksi');
            $table->enum('urgensi',['Kritis','Penting','Rekomendasi'])->nullable();
            $table->string('catatan',255);
            $table->enum('departemen',['Elektrikal','Mekanikal','Instrument']);
            $table->enum('dilakukan',['Reparasi','Penyetelan','Preventive','Cleaning','Modifikasi']);
            $table->string('keterangan',255)->nullable();
            $table->string('manager',255);
            $table->string('spvmtc',255);
            $table->string('pelaksana',255);
            $table->string('pelapor',255);
            $table->date('tglsubrun')->nullable();
            $table->date('tglsubend')->nullable();
            $table->string('countsub',255);
            $table->string('eksekutor',255);
            $table->string('tahap',255);
            $table->date('eksekusiday')->nullable();
            $table->time('starkerja')->nullable();
            $table->time('endkerja')->nullable();
            $table->string('manhour',255)->nullable();
            $table->enum('hasil',['Sudahdapatdiatasi','Tidakdapatdiatasi','Tidakditemukankelainan/kerusakan'])->nullable();
            $table->string('cegah',255);
            $table->text('material')->nullable();
            $table->enum('status',['Created','Onprogres','Completed']);
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
