<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){
        $series = ['Grey\'s Anatomy','Lost','Agents of Shield'];

        return view('series.index', compact('series'));
    }

    public function create(Request $request){
        
    }
}


