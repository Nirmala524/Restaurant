<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
   protected $fillable=['name','title','price','menu_id','class','image','status'];

   public function MenuName(){
      return $this->belongsTo(Menu::class,'menu_id','id');
  }
}
