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
        'status-laporan',
        'urgensi',
        'catatan',
        'departement',
        'dilakukan',
        'Keterangan',
        'manager',
        'spvmtc',
        'pelaksana',
        'pelapor',
        'status',
    ];
}
