<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelimgScroll extends Model
{
   public function Hotel(){
       return $this->belongsTo(Hotel::class);
   }
}
