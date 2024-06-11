<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class operator_payment extends Model
{
    use HasFactory;
    protected $table = 'operator_payments';
    protected $fillable = [
        'operator_name',
        'provinsi',
        'status',
        'proof',
    ];
}
