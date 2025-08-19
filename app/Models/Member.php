<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'photo', 'nid', 'dob', 'father_name', 'mother_name',
        'village', 'union_parishad', 'upazila', 'zila', 'phone', 'email',
        'amount_of_tea_garden', 'tea_garden_address', 'dag_number', 'mouja_name'
    ];
}
