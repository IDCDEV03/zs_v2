<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consent_chk extends Model
{
    use HasFactory;
    protected $fillable = [
        'consent_token',
        'member_id',
        'consent_chk'
    ];
}
