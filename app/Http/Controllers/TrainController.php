<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
       
        $trains = Train::all();
        return view('home', compact('trains'));
    }

public function orari()
{
    $trains = Train::where('orario_di_partenza', '>=', now()->format('H:i:s'))->get();
    return view('orari', compact('trains'));
}
}