<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    public $timestamps = false;

        public function reservationTables(){
            return $this->hasMany(ReservationTable::class);
        }

        public function restaurant(){
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }
}
