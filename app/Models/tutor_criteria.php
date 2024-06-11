<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutor_criteria extends Model
{
    use HasFactory;
    protected $table = 'tutor_criterias';
    protected $fillable = [
        'nama_pengirim',
        'jenis_kelamin',
        'provinsi',
        'alamat_mengajar',
        'universitas/sekolah',
        'student_level',
        'jurusan',
        'mata_pelajaran',
        'hari',
        'cover_image',
        'jam',
        'fee',
        'additional_notes',

    
    
    ];
}
