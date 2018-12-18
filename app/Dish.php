<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    public $timestamps = false;

    public function dishRecipe(){
        return $this->hasMany(DishRecipe::class);
    }

    public function orderedDish(){
        return $this->hasMany(OrderedDish::class);
    }
}
