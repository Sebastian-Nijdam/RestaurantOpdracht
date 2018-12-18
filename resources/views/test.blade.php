@extends ('layouts.app')
@section ('content')

 ReservationTables data
<div>{{$reservationskey}}</div>
<br>
Reservation binding data with ReservationTables
<div>{{$reservationskey[0]->reservationTables}}</div>
<br>
Reservation binding data with Tables
<div>{{$reservationskey[0]->reservationTables[0]->table}}</div>
<br>
Reservation binding data with Restaurant
<div>{{$reservationskey[0]->reservationTables[0]->table->restaurant}}</div>
<br>
Reservation binding data with OpenTime
<div>{{$reservationskey[0]->reservationTables[0]->table->restaurant->openTime}}</div>
<br>
Reservation binding data with Order
<div>{{$reservationskey[0]->reservationTables[0]->order}}</div>
<br>
Reservation binding data with OrderedDish
<div>{{$reservationskey[0]->reservationTables[0]->order->orderedDish}}</div>
<br>
Reservation binding data with Dish
<div>{{$reservationskey[0]->reservationTables[0]->order->orderedDish[0]->dish}}</div>
<br>
Reservation binding data with DishRecipe
<div>{{$reservationskey[0]->reservationTables[0]->order->orderedDish[0]->dish->dishRecipe}}</div>
<br>
Reservation binding data with Product
<div>{{$reservationskey[0]->reservationTables[0]->order->orderedDish[0]->dish->dishRecipe[0]->product}}</div>
<br>
Reservation binding data with User
<div>{{$reservationskey[0]->user}}</div>
<br><br>
OpenTime data
<div>{{$opentimeskey}}</div>
<br>
OpenTime binding data with Restaurant
<div>{{$opentimeskey[0]->restaurant}}</div>
<br>
OpenTime binding data with Table
<div>{{$opentimeskey[0]->restaurant->table}}</div>
<br>
OpenTime binding data with ReservationTable
<div>{{$opentimeskey[0]->restaurant->table[0]->reservationTables}}</div>
<br>
OpenTime binding data with Reservation
<div>{{$opentimeskey[0]->restaurant->table[0]->reservationTables[0]->reservation}}</div>
<br><br>
Product data
<div>{{$productskey}}</div>
<br>
Product binding data with DishRecipe
<div>{{$productskey[0]->dishRecipe}}</div>
<br>
Product binding data with Dish
<div>{{$productskey[0]->dishRecipe[0]->dish}}</div>
<br>
Product binding data with OrderedDish
<div>{{$productskey[0]->dishRecipe[0]->dish->orderedDish}}</div>
<br>
Product binding data with Order
<div>{{$productskey[0]->dishRecipe[0]->dish->orderedDish[0]->order}}</div>
<br>
Product binding data with ReservationTables
<div>{{$productskey[0]->dishRecipe[0]->dish->orderedDish[0]->order->reservationTables}}</div>

@endsection