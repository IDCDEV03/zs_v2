<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driving_license_img extends Model
{
    use HasFactory;
    protected $fillable = [
        'dl_code',        
        'dl_type',
        'dl_cover',
    ];
}
