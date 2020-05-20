<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill_title extends Model
{
   public function items(){
        return $this->hasMany(Skill_item::class);
    }
}
