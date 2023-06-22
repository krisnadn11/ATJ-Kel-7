<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table = "peserta";
    protected $fillable = [
        'nama',
        'konsentrasi',
        'nim',
        'judul',
        'jenis_acara',
    ];
}
