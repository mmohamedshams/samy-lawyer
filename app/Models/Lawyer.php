<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'specialty',
        'profile_image',
    ];
}
