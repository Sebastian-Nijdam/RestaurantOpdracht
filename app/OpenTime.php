<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpenTime extends Model
{
    public $timestamps = false;

    public function restaurant(){
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }
}
