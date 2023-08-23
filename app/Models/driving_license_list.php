<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driving_license_list extends Model
{
    use HasFactory;
    protected $fillable = [
        'dl_code',
        'dl_course_name',
        'dl_detail',
        'dl_other',
        'dl_type',
        'dl_price',
    ];
}
