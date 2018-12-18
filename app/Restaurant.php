<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public $timestamps = false;

    public function openTime(){
        return $this->hasMany(OpenTime::class);
    }

    public function table(){
        return $this->hasMany(Table::class);
    }
}
