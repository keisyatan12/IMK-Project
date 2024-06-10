<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobseeker extends Model
{
    use HasFactory;
    protected $table = 'jobseekers';
    protected $fillable = [
        'nik',
        'user_id',
        'nama_jobseeker',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'no_hp',
        'provinsi',
        'alamat_domisili',
        'universitas/sekolah',
        'jenjang_pendidikan',
        'jurusan',
        'image',
        'cv',

    
    
    ];
}
