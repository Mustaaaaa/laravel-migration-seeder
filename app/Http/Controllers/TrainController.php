<?php

namespace App\Http\Controllers;

use App\Models\train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index()
    {

        $trains = Train::whereDate('Orario_di_partenza', today())->get();
        dd($trains);

        return view('home', compact('trains'));
    }
}
