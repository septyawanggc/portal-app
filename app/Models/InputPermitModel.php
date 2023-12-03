<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputPermitModel extends Model
{
    use HasFactory;
    protected $table = 'inputpermit';
    protected $primarykey = 'id';
    protected $fillable = [
        'nopermit',
        'tanggal',
        'divisi',
        'nama',
        'kode',
        'type',
        'jumlah',
        'satuan',
        'keperluan',
        'keterangan',
        'diajukan',
        'diperiksa',
        'dikeluarkan',
        'status',
        'inputuser',

    ];
}
