<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        return view('template', ['reservationskey' => Reservation::all()]);
    }

}
