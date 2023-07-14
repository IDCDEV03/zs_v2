<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class information_p1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',        
        'member_id',
        'member_prefix',
        'member_name',
        'member_lastname',
        'member_phone',
        'member_hbd',
        'member_gender',
        'member_address',
        'member_province',
        'member_amphur',
        'member_tambon',
        'member_zipcode',
        'member_lineid',
        'member_career',
        'member_career_name',
        'member_position',
        'member_income',
        'member_family_income',
        'member_family_number',
        'member_school',
        'member_class',
        'std_family_income',
        'std_family_member',
    ];       
}
