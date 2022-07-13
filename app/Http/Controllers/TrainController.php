<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index(){

        
        $trains = Train::where('departure_time', '=', date('Y-m-d'))->get();
        
        return view('homepage', compact('trains'));
    }
}
