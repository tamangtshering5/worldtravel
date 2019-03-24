<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function HotelimgScroll(){
        return $this->hasMany(HotelimgScroll::class,'Hotel_id','id');
    }

    public function HotelTab(){
        return $this->hasMany(HotelTab::class,'Hotel_id','id');
    }
}
