<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;

    public function reservationTables() {
        return $this->hasMany(ReservationTable::class);
    }

    public function orderedDish(){
        return $this->hasMany(OrderedDish::class);
    }
}
