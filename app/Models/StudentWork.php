<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentWork extends Model
{
    protected $fillable = [
        'photo',
        'work_name',
        'description',
        'creator_name',
        'created_date',
    ];

    protected $casts = [
        'created_date' => 'date',
    ];
}
