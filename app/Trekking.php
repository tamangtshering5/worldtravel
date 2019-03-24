<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trekking extends Model
{
    public function TrekkingimgScroll(){
        return $this->hasMany(TrekkingimgScroll::class,'Trekking_id','id');
    }

    public function TrekkingTab(){
        return $this->hasMany(TrekkingTab::class,'Trekking_id','id');
    }
}
