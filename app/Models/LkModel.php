<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LkModel extends Model
{
    use HasFactory;
    protected $table = 'laporankerusakan';
    protected $fillable = [
        'id',
        'nolk',
        'nama',
        'day',
        'tanggal',
        'alat',
        'pid',
        'bangunan',
        'analisa',
        'kerusakan',
        'action',
        'operator',
        'diperiksa',
        'statuslk',
        'urgensi',
        'catatan',
        'departement',
        'dilakukan',
        'Keterangan',
        'manager',
        'spvmtc',
        'pelaksana',
        'pelapor',
        'tglsubrun',
        'tglsubend',
        'countsub',
        'eksekutor',
        'tahap',
        'eksekusiday',
        'starkerja',
        'endkerja',
        'manhour',
        'hasil',
        'cegah',
        'material',
        'status',
    ];
}
