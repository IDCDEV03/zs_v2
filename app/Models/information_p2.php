<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class information_p2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',        
        'member_id',
        'member_multimedia',
        'member_activity',
        'member_travel',
        'member_license_chk'
    ];
}
