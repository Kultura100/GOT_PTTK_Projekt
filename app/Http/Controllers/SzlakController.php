<?php

namespace App\Http\Controllers;

use App\Models\Grupa;
use App\Models\Pasmo;
use App\Models\Punkt;
use Illuminate\Http\Request;
use App\Models\ListaPodpunkt;


class SzlakController extends Controller
{
    public function index()
    {
        return view('szlak.index',[
            'grupy' => Grupa::get(),  
        ]);
    }

    public function szczegoly($id)
    {
        $punkty = Punkt::get();
        return view('szlak.szczegoly',compact('punkty'));
    }
}
