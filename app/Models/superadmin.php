<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class superadmin extends Model
{
    use HasFactory;
    protected $table = 'superadmins';
    protected $fillable = [
        'nik',
        'user_id',
        'nama_superadmin',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat_domisili',
        'jenjang_pendidikan',
        'jurusan',
        'image',
    
    ];
}
