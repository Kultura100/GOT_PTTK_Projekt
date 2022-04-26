<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObowiazkiController extends Controller
{
    public function index()
    {
        return view('obowiazki.index');
    }
}
