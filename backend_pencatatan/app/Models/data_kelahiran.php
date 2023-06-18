<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class data_kelahiran extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'data_kelahiran';
    protected $fillable = [
        'nama_bayi',
        'nama_ibu',
        'alamat',
        'no_hp',
        'tanggal_lahir',
        'jam_lahir',
        'jenis_kelamin',
        'tinggi_badan',
        'berat_badan',
        'lingkar_kepala',
        'lingkar_dada',
        'spartus',
        'bidan'
    ];
    protected $hidden = [];
}
