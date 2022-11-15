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
        $punkty = Punkt::take(0);
        if($id == 1){
        $punkty = Punkt::whereBetween('id', [1, 24])->get();
        }elseif($id == 2){
        $punkty = Punkt::whereBetween('id', [25, 30])->get();
        }elseif($id == 3){
        $punkty = Punkt::whereBetween('id', [31, 36])->get();
        }elseif($id == 4){
        $punkty = Punkt::whereBetween('id', [37, 42])->get();
        }elseif($id == 5){
        $punkty = Punkt::whereBetween('id', [43, 47])->get();
        }elseif($id == 6){
        $punkty = Punkt::whereBetween('id', [48, 50])->get();
        }elseif($id == 7){
        $punkty = Punkt::whereBetween('id', [51, 55])->get();
        }elseif($id == 8){
        $punkty = Punkt::whereBetween('id', [56, 61])->get();
        }elseif($id == 9){
        $punkty = Punkt::whereBetween('id', [62, 67])->get();
        }elseif($id == 10){
        $punkty = Punkt::whereBetween('id', [67, 73])->get();
        }elseif($id == 11){
        $punkty = Punkt::whereBetween('id', [74, 79])->get();
        }elseif($id == 12){
        $punkty = Punkt::whereBetween('id', [80, 85])->get();
        }elseif($id == 13){
        $punkty = Punkt::whereBetween('id', [86, 91])->get();
        }elseif($id == 14){
        $punkty = Punkt::whereBetween('id', [92, 97])->get();
        }elseif($id == 15){
        $punkty = Punkt::whereBetween('id', [98, 103])->get();
        }elseif($id == 16){
        $punkty = Punkt::whereBetween('id', [104, 109])->get();
        }elseif($id == 17){
        $punkty = Punkt::whereBetween('id', [110, 115])->get();
        }elseif($id == 18){
        $punkty = Punkt::whereBetween('id', [116, 119])->get();
        }elseif($id == 19){
        $punkty = Punkt::whereBetween('id', [120, 125])->get();
        }elseif($id == 20){
        $punkty = Punkt::whereBetween('id', [126, 131])->get();
        }elseif($id == 21){
        $punkty = Punkt::whereBetween('id', [132, 137])->get();
        }elseif($id == 22){
        $punkty = Punkt::whereBetween('id', [138, 143])->get();
        }elseif($id == 23){
        $punkty = Punkt::whereBetween('id', [144, 149])->get();
        }elseif($id == 24){
        $punkty = Punkt::whereBetween('id', [150, 155])->get();
        }elseif($id == 25){
        $punkty = Punkt::whereBetween('id', [156, 161])->get();
        }elseif($id == 26){
        $punkty = Punkt::whereBetween('id', [162, 167])->get();
        }elseif($id == 27){
        $punkty = Punkt::whereBetween('id', [168, 176])->get();
        }
        return view('szlak.szczegoly',compact('punkty'));
    }
}
