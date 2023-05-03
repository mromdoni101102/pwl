<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaModel extends Model
{
    use HasFactory;
    protected $table = 'keluargas';
    protected $fillable = [
        'Nama',
        'Status_Hubungan',
        'Tanggal_Lahir',
    ];
}
