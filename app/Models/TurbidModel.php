<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurbidModel extends Model
{
    use HasFactory;
    protected $table = 'form_turbid';
    protected $primarykey = 'id';
    protected $foreignkey = 'Kode';
    protected $fillable = [
        'id',
        'Kode',
        'Equipment',
        'Range1',
        'Standar1',
        'Hasil1',
        'Range2',
        'Standar2',
        'Hasil2',
        'Tanggal',
        'Keterangan',
    ];
}
