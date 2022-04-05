<?php

namespace App\Http\Controllers;

use App\Models\Wycieczka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RaportController extends Controller
{
    public function index()
    {
        Wycieczka::where('id_turysty',Auth::user()->id)->get()->load(['wieleodcinkow.wycieczka_odcinek2.pasmo' => function($q) use(&$wycieczki){
            $wycieczki = $q->get();
        }]);
        foreach($wycieczki as $wycieczka)
        {
           $pasmo = $wycieczka->nazwa;
        }

    return view('raport.index',[
        'wycieczki' => Wycieczka::where('id_turysty',Auth::user()->id)->get(),
        'pasmo' => $pasmo,
    ]);
    }
}
