<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index() {

        //$trains = Train::all();
        //return view('welcome', compact('trains'));

        
        
        
        $mytime_trains = Train::whereTime('orario_di_partenza' , '09:00:00')->get();
        
        return view('welcome', compact('mytime_trains'));
    }

    



   
}