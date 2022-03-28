<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SzlakController extends Controller
{
    public function index()
    {
        return view('szlak.szczegoly',[
            
            
        ]);
    }
}
