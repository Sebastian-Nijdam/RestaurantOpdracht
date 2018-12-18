<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationTable extends Model
{
    public $timestamps = false;

    public function reservation() {
     return $this->belongsTo(Reservation::class, 'reservation_id', 'id');
    }

    public function order() {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    public function table(){
        return $this->belongsTo(Table::class, 'table_id', 'id');
    }
}
