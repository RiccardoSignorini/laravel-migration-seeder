<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    //RICHIESTA TRENI
    public function getTrains(){
        $trains = Train::All();

        return view('pages.welcome', compact('trains'));
    }
}
