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

         $bialalista = [];
         $uzytkownicy = User::role(['user','przodownik'])->get();
     foreach ($uzytkownicy as $uzytkownik) {
         array_push($bialalista,$uzytkownik->id);
         }
         $lista = array_intersect_key($kwerenda, array_flip($bialalista));
         $kwerenda=$lista;
         $kwerenda = array_slice($kwerenda,0,10,true); //ograniczenie do 10 uzytkownikow
        $uzytkownicy = User::role(['user','przodownik'])->get();
        return view('ranking.index',compact('kwerenda','uzytkownicy'));
    }
}
