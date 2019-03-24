<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourimgScroll extends Model
{
    public function Tour(){
        return $this->belongsTo(Tour::class);
    }
}
