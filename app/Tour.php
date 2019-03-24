<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
   public function TourimgScroll(){
       return $this->hasMany(TourimgScroll::class,'Tour_id','id');
   }

    public function TourTab(){
        return $this->hasMany(TourTab::class,'Tour_id','id');
    }
}
