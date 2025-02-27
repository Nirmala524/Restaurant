<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable=[
        'email',
        'contact',
        'name',
        'desc',
        'twitter',
        'facebook',
        'instagram',
        'Open',
        'openhours',
        'insname',
        'newsletter',
        'detail',
        'map'
    ];
}
