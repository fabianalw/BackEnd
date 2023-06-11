<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
         'nama_lengkap', 'nama_ibu', 'alamat', 'no_hp', 'jenis_kelamin', 'tinggi_badan', 'berat_badan', 'lingkar_kepala', 'lingkar_dada'
    ];
}
