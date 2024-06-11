<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parents extends Model
{
    use HasFactory;
    protected $table = 'parents';
    protected $fillable = [
        'nik',
        'user_id',
        'nama_parents',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'no_hp',
        'provinsi',
        'alamat_domisili',
        'image',
    
    
    ];
}
