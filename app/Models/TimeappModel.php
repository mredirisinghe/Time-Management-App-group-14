<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeappModel extends Model
{
    protected $fillable = [
        'name',
        'role',
        'description',
        'time'
    ];
}
