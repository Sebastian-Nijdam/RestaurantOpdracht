<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DishRecipe extends Model
{
    public $timestamps = false;

    public function dish(){
        return $this->belongsTo(Dish::class, 'dish_id', 'id');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
