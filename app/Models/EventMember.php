<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventMember extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'photo', 'phone', 'address', 'bkash_code', 'shirt_size'
    ];
}
