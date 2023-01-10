<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Odznaka;
use App\Models\Odznaka_Turysty;
use Illuminate\Http\Request;

class ObowiazkiController extends Controller
{
    public function index()
    {
        return view('obowiazki.index');
    }

    public function listaOdznak()
    {
        $user = User::where('punkty', '>=', 15)->get();
        $odznaki = Odznaka::take(7)->get();
        // Narazie 7 odznak bo maja inta
        $kolekcja = collect([]);
        $tablicauzytkownikow = [];
        //dd($user);
        foreach ($user as $value) {
            //dump($value->pobierzOdznaki);
            if(isset($value->pobierzOdznaki) && $value->pobierzOdznaki->count() > 0)
            {
                foreach ($odznaki as $odznaka) {
                    //dd($value->pobierzOdznaki->where('id_odznaki',$odznaka->id)->count(),$value->id,$odznaka->id);
                    if(!$value->pobierzOdznaki->where('id_odznaki',$odznaka->id)->count() > 0)
                    {
                        if($value->punkty >= $odznaka->wymaganepunkty)
                        {
                            $user = User::where('id',$value->id)->first();
                            $user['odznaka'] = (Odznaka::where('id',$odznaka->id)->first());
                            $kolekcja->add($user);  
                        }
                    }
                }
            }
            else {
                $user = User::where([['punkty', '>=', 15],['id',$value->id]])->first();
                $user['odznaka'] = (Odznaka::where('id',1)->first());
                $kolekcja->add($user);
            }
        }
        //dd($kolekcja);
        return view('obowiazki.listaOdznak', compact('kolekcja'));
    }

    public function akceptujodznake($iduzytkownika, $idodznaki){
        if($iduzytkownika && $idodznaki)
        {
            Odznaka_Turysty::create([
                'id_turysty' => $iduzytkownika,
                'id_odznaki' => $idodznaki,
            ]);

            $user = User::where('id',$iduzytkownika)->first();
            $odznaka = Odznaka::where('id',$idodznaki)->first();
            $user->punkty = intval((($user->punkty - $odznaka->wymaganepunkty)*50)/100);
            $user->save();

            return redirect()->route('obowiazki.listaOdznak')
            ->with('success', __('Poprawnie zatwierdzono odznake!')); 
        }
    }

    public function nieakceptuj($iduzytkownika, $idodznaki){


        return redirect()->route('obowiazki.listaOdznak')
        ->with('danger', __('Odznaka nie została przyznana.')); 
    }
}
