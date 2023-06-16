<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    //RICHIESTA TRENI
    public function index()
    {
        $trains = Train::All();

        return view('pages.welcome', compact('trains'));
    }
}
