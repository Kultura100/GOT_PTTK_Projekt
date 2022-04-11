<?php

namespace App\Http\Controllers;

use App\Models\Grupa;
use App\Models\Pasmo;
use App\Models\Punkt;
use App\Models\Odcinek;
use App\Models\Podpunkt;
use App\Models\Wycieczka;
use Illuminate\Http\Request;
use App\Models\Odznaka_Turysty;
use App\Models\Wycieczka_odcinek;
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
            'odcinki' => Odcinek::get(),
        ]);
    }

    public function pokazPasma($id)
    {
        $pasma = Pasmo::where('id_grupa',$id)->get();
        return response()->json($pasma);
    }

    public function pokazodcinki($id)
    {
        $odcinek = Odcinek::where('id_pasma',$id)->get()->load('punktpocz', 'punktkoncz');
        return response()->json($odcinek);
    }

    public function store(Request $request)
    {
        dd($request);
        $wycieczka = Wycieczka::create(
        [
            'id_turysty' => Auth::user()->id,
            'id_tworcy' => Auth::user()->id,
            'dataod' => $request->input('dataod'),
            'datado' => $request->input('datado'),
            'punkty' => 0,            
        ]);

        $przetestuj = $request->input('odcinekid');
        if(isset($przetestuj)){

        for ($i=0; $i < $request->input('odcinekid') ; $i++) { 

            $wycieczka_odcinek = Wycieczka_odcinek::create(
                [
                    'id_wycieczka' => $wycieczka->id,
                    'id_odcinek' => $request->input('odcinekid')[$i],
                    'data' => $request->input('dataod'),
                    'id_status' => 3,
                    'liczba_punktow' => 2,
                    // 'odwrocony' => if($request->input('zmienione')[$i] == 1){ 1 },
                ]
            );
        }

    }
       



        return redirect()->route('wycieczki.index')
            ->with('success', __('translations.wycieczki', [
                'numer' => $wycieczka->id
            ]));
    }
}