<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class operator extends Model
{
    use HasFactory;
    protected $table = 'operators';
    protected $fillable = [
        'nik',
        'user_id',
        'nama_operator',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'provinsi_naungan',
        'alamat_domisili',
        'jenjang_pendidikan',
        'jurusan',
        'status',
        'image',
    
    ];
}
