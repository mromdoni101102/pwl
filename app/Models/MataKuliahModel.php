<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliahModel extends Model
{
    use HasFactory;
    protected $table = 'mata_kuliahs';
    protected $fillable = [
        'Nama_Matkul',
        'Nama_Dosen',
        'Jumlah_SKS',
    ];
}
