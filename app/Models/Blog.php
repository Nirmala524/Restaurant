<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
   protected $fillable = [
      'name',
      'title',
      'date',
      'role',
      'detail',
      'image',
      'status'
   ];
}
