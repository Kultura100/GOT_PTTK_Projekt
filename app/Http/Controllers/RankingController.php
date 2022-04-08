<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Odznaka_Turysty;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{

    
    public function index()
    {
        
        $odznaki = Odznaka_Turysty::get();
        $kwerenda = $odznaki->countBy('id_turysty')->toArray();

        $svalue=array_values($kwerenda);
        rsort($svalue);
        $posortowana=array();
        foreach ($svalue as $key => $value) {
           $kk=array_search($value,$kwerenda);
           $posortowana[$kk]=$value;
           unset($kwerenda[$kk]);
        }
        $kwerenda = $posortowana;

        $uzytkownicy = User::get();
        return view('ranking.index',compact('kwerenda','uzytkownicy'));
    }
}
