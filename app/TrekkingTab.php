<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrekkingTab extends Model
{
    public function Trekking(){
        return $this->belongsTo(Trekking::class);
    }
}
