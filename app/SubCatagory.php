<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCatagory extends Model
{
    public function Catogary(){
        return $this->belongsTo(Catogary::class,'Catogary_id');
    }
}
