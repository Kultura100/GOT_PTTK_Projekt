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

    public function szczegoly($id)
    {        
        $wycieczki = Wycieczka::find($id);        
        return view('wycieczki.szczegoly', compact('wycieczki')        
    );
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
        $przetestuj = $request->input('odcinekid');
        if(isset($przetestuj)){

        $wycieczka = Wycieczka::create(
        [
            'nazwa' => $request->input('nazwa'),
            'id_turysty' => Auth::user()->id,
            'id_tworcy' => Auth::user()->id,
            'dataod' => $request->input('dataod'),
            'datado' => $request->input('datado'),
            'punkty' => 0,            
        ]);

        $aktualnypunkt = 0;
        $zmienionykierunek =0;
        for ($i=0; $i < count($request->input('odcinekid')) ; $i++) { 

            $odcinekpunkty = Odcinek::find($request->input('odcinekid')[$i]);
            if($request->input('zmienione')[$i] == 1){
                $zmienionykierunek = 1;
                $aktualnypunkt =  $odcinekpunkty->punkty_do;
                } else {
                    $zmienionykierunek = 0;
                    $aktualnypunkt =  $odcinekpunkty->punkty_od;
                }

            $wycieczka_odcinek = Wycieczka_odcinek::create(
                [
                    'id_wycieczka' => $wycieczka->id,
                    'id_odcinek' => $request->input('odcinekid')[$i],
                    'data' => $request->input('dataod'),
                    'id_status' => 3,
                    'liczba_punktow' => $aktualnypunkt,
                    'odwrocony' => $zmienionykierunek,
                ]);

                $wycieczka->update([
                    'punkty' => $wycieczka->ilepunktow($wycieczka->id),
                ]);
        }
    }

        return redirect()->route('wycieczki.index')
            ->with('success', __('translations.wycieczki.success',[
                'name' => $wycieczka->id,
            ]));
    }
}