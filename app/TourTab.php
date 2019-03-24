<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourTab extends Model
{
    public function Tour(){
        return $this->belongsTo(Tour::class);
    }
}
