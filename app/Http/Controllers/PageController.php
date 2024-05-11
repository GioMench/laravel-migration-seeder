<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index() {

        $trains = Train::all();
        //dd($movies);
        return view('welcome', compact('trains'));
    }

   
}