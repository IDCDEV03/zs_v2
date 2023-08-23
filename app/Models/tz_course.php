<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tz_course extends Model
{
    use HasFactory;
    protected $fillable = [
        'tz_id',
        'tz_group',
        'tz_name',
        'tz_cover',
        'tz_status',
        'tz_file',
    ];
}
