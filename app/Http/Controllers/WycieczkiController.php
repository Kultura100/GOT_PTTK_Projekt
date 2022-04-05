<?php

namespace App\Http\Controllers;

use App\Models\Wycieczka;
use Illuminate\Http\Request;
use App\Models\Odznaka_Turysty;
use Illuminate\Support\Facades\Auth;

class WycieczkiController extends Controller
{
    public function index()
    {
        
        return view('wycieczki.index',
        [
            'wycieczki' => Wycieczka::get()
        ]);
    }

    public function create()
    {
        return view('wycieczka.create',
        [
            'wycieczka' => Wycieczka::all(),
        ]);
    }

    public function store(WycieczkaRequest $request)
    {
      //ponizej      
        $wycieczka = Wycieczka::create(
        [
            'id_turysty' => $request->input('id_turysty'),
            'dataod' => $request->input('dataod'),
            'datado' => $request->input('datado'),
            'punkty' => $request->input('punkty')            
        ]);
        return redirect()->route('wycieczki.index')
            ->with('success', __('translations.wycieczki', [
                'numer' => $wycieczka->id
            ]));
    }
}