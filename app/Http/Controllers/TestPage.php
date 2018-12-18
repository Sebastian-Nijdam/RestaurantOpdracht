<?php

namespace App\Http\Controllers;

use App\OpenTime;
use App\Product;
use App\Reservation;
use Illuminate\Http\Request;

class TestPage extends Controller
{
    public function index() {
        return view('test', ['reservationskey' => Reservation::all(), 'productskey' => Product::all(), 'opentimeskey' => OpenTime::all()]);
    }
}