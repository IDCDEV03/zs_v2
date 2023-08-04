<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class information_p3 extends Model
{
    use HasFactory;
    protected $fillable = [  
        'member_id',
        'question1',
        'question2',
        'question3',
        'know_us',
    ];
}
