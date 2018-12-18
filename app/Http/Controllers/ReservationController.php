<?php

namespace App\Http\Controllers;

use App\Table;
use App\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index() {
        return view('reservation', ['users' => User::all()]);
    }

    public function available() {
        $data = ['tables' => Table::all()];

        return response('', 200)->header('data', json_encode($data));
    }
}
