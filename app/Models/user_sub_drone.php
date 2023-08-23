<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_sub_drone extends Model
{
    use HasFactory;
    protected $fillable = [  
        'user_id',
        'drone_id',
        'sub_status',
        'user_phone',
        'user_timing',
        'user_chk',
    ];
}
