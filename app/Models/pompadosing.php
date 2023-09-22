<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pompadosing extends Model
{
    use HasFactory;
    protected $table = 'pompadosing';
    protected $fillable = 
    [
        'id',
        'idalat',
        'Nama',
        'Tanggal',
        'Bulan',
        'Status',
        'Temp',
        'Leveloli',
        'Stroke',
        'Nois',
        'Keterangan',
        'Oleh',
    ];
}
