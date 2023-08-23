<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class idd_branch extends Model
{
    use HasFactory;
    protected $fillable = [
        'branch_id',
        'branch_category',
        'branch_province',
        'branch_name',
        'branch_address',
        'branch_fb',
        'branch_phone',
        'branch_email',
        'branch_gps',
        'branch_other',
    ];
}
