<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $casts = [
        'startDay' => 'datetime:Y-m-d',
        'endDay' => 'datetime:Y-m-d',
    ];
}
