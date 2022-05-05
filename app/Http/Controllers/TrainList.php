<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainList extends Controller
{
    public function getData() {
        return view('index');
    }
}
