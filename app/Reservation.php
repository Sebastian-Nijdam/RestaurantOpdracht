<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public $timestamps = false;

    public function reservationTables() {
        return $this->hasMany(ReservationTable::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
