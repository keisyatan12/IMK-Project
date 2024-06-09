<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutor_schedule extends Model
{
    use HasFactory;
    protected $table = 'tutor_schedules';
    protected $fillable = [
        'title',
        'tutor_name',
        'start_date',
        'end_date',
    ];
}
