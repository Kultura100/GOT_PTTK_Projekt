<?php

namespace App\Http\Controllers;

use App\Models\Wycieczka;
use Illuminate\Http\Request;
use App\Models\Odznaka_Turysty;
use Illuminate\Support\Facades\Auth;

class OsiagnieciaController extends Controller
{
    public function index()
    {
        return view('osiagniecia.index',[
            'wycieczki' => Wycieczka::where('id_turysty',Auth::user()->id)->get(),
            'odznaka' => Odznaka_Turysty::where('id_turysty',Auth::user()->id)->get()
        ]);
    }
}
