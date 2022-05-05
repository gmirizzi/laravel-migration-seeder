<?php

namespace App\Http\Controllers;

use App\Train;
class TrainList extends Controller
{
    public function getData() {
        $trains=Train::all();
        return view('index', compact('trains'));
    }
}
