<?php

namespace App\Http\Controllers;

use App\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index(){
        $data = Train::all();
        return view('trains.index', compact("data"));
    }
}
