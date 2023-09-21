<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pompaintake extends Model
{
    use HasFactory;
    protected $table = 'pompaintake';
    protected $fillable = 
    [
        'Id',
        'Equipment',
        'Tanggal',
        'Bulan',
        'Status',
        'DEVP',
        'DEHP',
        'DEAP',
        'DEPTemp',
        'NDEVP',
        'NDEHP',
        'NDEAP',
        'NDEPTemp',
        'MechP',
        'PressP',
        'DEVM',
        'DEHM',
        'DEAM',
        'DEMTemp',
        'NDEVM',
        'NDEHM',
        'NDEAM',
        'NDEMTemp',
        'FreqM',
        'CurrM',
        'RPM',
        'Keterangan',
        'Oleh',
    ];
}
