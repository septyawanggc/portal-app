<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LkModel extends Model
{
    use HasFactory;
    protected $table = 'laporankerusakan';
    protected $primarykey = 'id';
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
        'spvprod',
        'statuslk',
        'urgensi',
        'catatan',
        'departement',
        'dilakukan',
        'userprod',
        'usermgr',
        'manager',
        'spvmtc',
        'usermtc',
        'userpelapor',
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
        'userspvmtc',
        'status',
    ];
}
