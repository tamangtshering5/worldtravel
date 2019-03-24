<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelTab extends Model
{
    public function Hotel(){
        return $this->belongsTo(Hotel::class);
    }
}
