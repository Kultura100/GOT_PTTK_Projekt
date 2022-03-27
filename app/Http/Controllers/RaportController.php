<?php

namespace App\Http\Controllers;

use App\Models\Wycieczka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RaportController extends Controller
{
    public function index()
    {
    return view('raport.index',[
        'wycieczki' => Wycieczka::where('id_turysty',Auth::user()->id)->get()
    ]);
    }
}
