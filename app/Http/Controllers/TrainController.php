<?php

namespace App\Http\Controllers;

use App\Models\train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function home()
    {

        $trains = Train::whereDate('data_di_partenza', today())->get();
        // dd($trains);

        return view('home', compact('trains'));
    }
}
