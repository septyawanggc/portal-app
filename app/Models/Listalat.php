<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listalat extends Model
{
    use HasFactory;
    protected $table = 'list_alat';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'kode',
        'equipment',
        'kodeOB',
        'lokasi',
        'keterangan',
    ];
}
