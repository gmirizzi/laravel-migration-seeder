<?php

namespace App\Http\Controllers;

use App\Train;
class TrainList extends Controller
{
    public function getData() {
        $trains=Train::whereDate('date', '!=', date('Y-m-d'))->paginate(15);
        return view('index', compact('trains'));
    }
}
