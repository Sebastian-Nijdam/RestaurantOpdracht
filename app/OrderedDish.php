<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderedDish extends Model
{
    public $timestamps = false;

    public function order(){
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    public function dish(){
        return $this->belongsTo(Dish::class, 'dish_id', 'id');
    }
}
