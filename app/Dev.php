<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dev extends Model
{
    //
    // public $table = "Devs";
    // public $primaryKey = "dev_id";
    // public $timestamps = false;

    public function skills(){
        return $this->belongsToMany('App\Skill');
    }
}
