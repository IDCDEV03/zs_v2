<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class idd_branch_img extends Model
{
    use HasFactory;
    protected $fillable = [
        'branch_id',
        'branch_img'
    ];
}
