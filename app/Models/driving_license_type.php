<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driving_license_type extends Model
{
    use HasFactory;
    protected $fillable = [
        'dl_type',
        'dl_name',
        'dl_branch',
    ];
}
