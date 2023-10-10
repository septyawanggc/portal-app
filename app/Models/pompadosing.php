<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Creagia\LaravelSignPad\Concerns\RequiresSignature;
use Creagia\LaravelSignPad\Contracts\CanBeSigned;

class pompadosing extends Model implements CanBeSigned
{
    use HasFactory,RequiresSignature;
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
