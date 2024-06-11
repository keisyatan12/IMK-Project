<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_history extends Model
{
    use HasFactory;
    protected $table = 'payment_histories';
    protected $fillable = [
        'nama_pengirim',
        'tutor',
        'provinsi',
        'status',
        'proof',
        

    
    
    ];
}
