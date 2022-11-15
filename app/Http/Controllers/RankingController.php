<?php

namespace App\Http\Controllers;

use App\Models\Ksiazeczka_wycieczka;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Odznaka_Turysty;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{

    public function index()
    {
        $temp = Ksiazeczka_wycieczka::where('zatwierdzona', 1)
            ->select('id_ksiazeczki', DB::raw('count(*) as test'))
            ->groupBy('id_ksiazeczki')
            ->get();
        $tablica = [];
        foreach ($temp as $key) {
            if($key->jakaksiazeczka->jakiUser->hasRole(['user','przodownik']))
            $tablica[$key->jakaksiazeczka->jakiUser->id] = $key->test;
        }
        $kwerenda = array_slice($tablica, 0, 10, true); //ograniczenie do 10 uzytkownikow
        $uzytkownicy = User::get();
        return view('ranking.index', compact('kwerenda', 'uzytkownicy'));
    }
}
