<?php

namespace App\Http\Controllers;

use App\Train;
use DateTime;

class TrainList extends Controller
{
    public function getData() {
        $trains=Train::whereDate('date', date('Y-m-d'))
                    ->get();
        return view('index', compact('trains'));
    }
}
