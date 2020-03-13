<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Skill extends Model
{
    //
    public function devs(){
        return $this->belongsToMany('App\Dev');
    }
}
