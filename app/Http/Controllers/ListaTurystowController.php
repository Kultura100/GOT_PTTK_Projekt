<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Zdjecia;
use App\Models\Wycieczka;
use App\Models\Ksiazeczka;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ksiazeczka_wycieczka;
use Illuminate\Support\Facades\Auth;

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
        return view('listaturystow.szczegoly', compact('wycieczkiSzczeg','wycieczkiZdj'));
    }
    
    
    public function zapisz($id){
        $zapisz = Ksiazeczka::where('id_turysty',  Auth::user()->id)->first();
        $sprawdzczyjest = Ksiazeczka_wycieczka::where('id_wycieczki',$id)->first();
        $sprawdzczyjest->zatwierdzona = 1;
        $sprawdzczyjest->save();

        dd($sprawdzczyjest);

        return redirect()->route('listaturystow.index')
            ->with('success', __('Poprawnie zatwierdzoną wycieczke!')); 
    }
}
