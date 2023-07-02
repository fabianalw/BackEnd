<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    use HasFactory;
    protected $table = "pemeriksaan";
    protected $fillable = ['nama_pasien', 'alamat', 'usia', 'jenis_kelamin', 'no_hp', 'jenis_pemeriksaan', 'tanggal_pemeriksaan', 'diagnosa'];
}
