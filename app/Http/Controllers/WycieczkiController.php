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
        return view('wycieczki.index',[
            'wycieczka' => Wycieczka::where('id_turysty',Auth::user()->id)->get(),
            'dataod' => Wycieczka::where('dataod',Auth::user()->id)->get()
        ]);
    }
}