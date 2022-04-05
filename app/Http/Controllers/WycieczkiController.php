<?php

namespace App\Http\Controllers;

use App\Models\Grupa;
use App\Models\Pasmo;
use App\Models\Punkt;
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
        return view('wycieczki.create',
        [
            'wycieczka' => Wycieczka::get(),
            'pasma' => Pasmo::get(),
            'grupy' => Grupa::get(),
            'punkty' => Punkt::get(),
        ]);
    }

    public function pokazPasma($id)
    {
        $pasma = Pasmo::where('id_grupa',$id)->get();
        return response()->json($pasma);
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