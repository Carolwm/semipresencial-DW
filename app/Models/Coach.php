<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
   protected $fillable = [
    'name',
    'image'
   ];

   public function pokemon (){ //identidade que vai ser vinculada
    return $this->hasMany(Pokemon::class);
   }
}
