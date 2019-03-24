<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catogary extends Model
{
   public function SubCatagory(){
       return $this->hasMany(SubCatagory::class);
   }
}
