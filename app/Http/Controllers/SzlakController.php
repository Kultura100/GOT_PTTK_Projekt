<?php

namespace App\Http\Controllers;

use App\Models\Grupa;
use App\Models\Pasmo;
use Illuminate\Http\Request;
use App\Models\ListaPodpunkt;


class SzlakController extends Controller
{
    public function index()
    {
        return view('szlak.index',[
            'grupy' => Grupa::get(),
            'pasmo1' => Pasmo::whereBetween('id',[1,3])->get(),
            'pasmo2' => Pasmo::whereBetween('id',[4,8])->get(),
            'pasmo3' => Pasmo::whereBetween('id',[9,20])->get(),
            'pasmo4' => Pasmo::whereBetween('id',[21,26])->get(),
            'pasmo5' => Pasmo::whereBetween('id',[27,31])->get(),
            'pasmo6' => Pasmo::whereBetween('id',[32,52])->get(),
            'pasmo7' => Pasmo::whereBetween('id',[53,59])->get()
            
        ]);
    }

    public function szczegoly(){
        return view('szlak.szczegoly',[
            'listapunktow' => ListaPodpunkt::get(),
        ]);
    }
}
