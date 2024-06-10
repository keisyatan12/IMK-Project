<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutor_review extends Model
{
    use HasFactory;
    protected $table = 'tutor_reviews';
    protected $fillable = [
        'nama_pengirim',
        'tutor',
        'provinsi',
        'alamat_mengajar',
        'grade',
        'review',

    
    
    ];
}
