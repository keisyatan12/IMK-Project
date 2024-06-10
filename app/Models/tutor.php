<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutor extends Model
{
    use HasFactory;
    protected $table = 'tutors';
    protected $fillable = [
        'nik',
        'user_id',
        'nama_tutor',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'no_hp',
        'provinsi_naungan',
        'alamat_domisili',
        'universitas/sekolah',
        'jenjang_pendidikan',
        'jurusan',
        'status',
        'image',
        'cv',
    
    ];
}
