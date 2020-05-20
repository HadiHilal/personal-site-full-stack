<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill_item extends Model
{
    //
    public function titles(){
        return $this->belongsTo(Skill_title::class);
    }
}
