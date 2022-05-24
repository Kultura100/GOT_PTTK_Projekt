<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Zdjecia;
use App\Models\Wycieczka;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ksiazeczka_wycieczka;

class ListaTurystowController extends Controller
{
    public function index()
    {
        $wycieczkiZatw = Ksiazeczka_wycieczka::where('zatwierdzona',0)->get();        
        return view('listaturystow.index',compact('wycieczkiZatw'));
    }

    public function szczegoly($id)
    {    
        $wycieczkiSzczeg = Wycieczka::find($id); 
        $wycieczkiZdj = Zdjecia::where('id_wycieczka',$id)->get();
        return view('listaturystow.szczegoly', compact('wycieczkiSzczeg','wycieczkiZdj')        
    );
    }
    
}
