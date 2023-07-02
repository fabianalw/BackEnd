<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelahiran extends Model
{
    use HasFactory;

    protected $table = "Kelahiran";
    protected $fillable = ['nama_bayi', 'nama_ibu', 'alamat', 'no_hp', 'tanggal_lahir', 'jam_lahir', 'tinggi_badan', 'berat_badan', 'lingkar_kepala', 'lingkar_dada', 'partus'];
}
