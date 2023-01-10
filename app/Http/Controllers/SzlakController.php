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
        }elseif($id == 28){
        $punkty = Punkt::whereBetween('id', [177, 181])->get();
        }elseif($id == 29){
        $punkty = Punkt::whereBetween('id', [182, 187])->get();
        }elseif($id == 30){
        $punkty = Punkt::whereBetween('id', [188, 193])->get();
        }elseif($id == 31){
        $punkty = Punkt::whereBetween('id', [194, 199])->get();
        }elseif($id == 32){
        $punkty = Punkt::whereBetween('id', [200, 205])->get();
        }elseif($id == 33){
        $punkty = Punkt::whereBetween('id', [206, 211])->get();
        }elseif($id == 34){
        $punkty = Punkt::whereBetween('id', [212, 217])->get();
        }elseif($id == 35){
        $punkty = Punkt::whereBetween('id', [218, 223])->get();
        }elseif($id == 36){
        $punkty = Punkt::whereBetween('id', [224, 229])->get();
        }elseif($id == 37){
        $punkty = Punkt::whereBetween('id', [230, 235])->get();
        }elseif($id == 38){
        $punkty = Punkt::whereBetween('id', [236, 241])->get();
        }elseif($id == 39){
        $punkty = Punkt::whereBetween('id', [242, 247])->get();
        }elseif($id == 40){
        $punkty = Punkt::whereBetween('id', [248, 253])->get();
        }elseif($id == 41){
        $punkty = Punkt::whereBetween('id', [254, 259])->get();
        }elseif($id == 42){
        $punkty = Punkt::whereBetween('id', [260, 265])->get();
        }elseif($id == 43){
        $punkty = Punkt::whereBetween('id', [266, 271])->get();
        }elseif($id == 44){
        $punkty = Punkt::whereBetween('id', [272, 277])->get();
        }elseif($id == 45){
        $punkty = Punkt::whereBetween('id', [278, 283])->get();
        }elseif($id == 46){
        $punkty = Punkt::whereBetween('id', [284, 289])->get();
        }elseif($id == 47){
        $punkty = Punkt::whereBetween('id', [290, 295])->get();
        }elseif($id == 48){
        $punkty = Punkt::whereBetween('id', [296, 301])->get();
        }elseif($id == 49){
        $punkty = Punkt::whereBetween('id', [302, 307])->get();
        }elseif($id == 50){
        $punkty = Punkt::whereBetween('id', [308, 311])->get();
        }elseif($id == 51){
        $punkty = Punkt::whereBetween('id', [312, 317])->get();
        }elseif($id == 52){
        $punkty = Punkt::whereBetween('id', [318, 323])->get();
        }elseif($id == 53){
        $punkty = Punkt::whereBetween('id', [324, 329])->get();
        }elseif($id == 54){
        $punkty = Punkt::whereBetween('id', [330, 335])->get();
        }elseif($id == 55){
        $punkty = Punkt::whereBetween('id', [336, 341])->get();
        }elseif($id == 56){
        $punkty = Punkt::whereBetween('id', [342, 345])->get();
        }elseif($id == 57){
        $punkty = Punkt::whereBetween('id', [346, 349])->get();
        }elseif($id == 58){
        $punkty = Punkt::whereBetween('id', [350, 355])->get();
        }elseif($id == 59){
        $punkty = Punkt::whereBetween('id', [356, 359])->get();
        }
        return view('szlak.szczegoly',compact('punkty'));
    }
}
