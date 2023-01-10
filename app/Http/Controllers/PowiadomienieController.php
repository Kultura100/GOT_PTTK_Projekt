<?php

namespace App\Http\Controllers;

use App\Models\Grupa;
use App\Models\Pasmo;
use App\Models\Odznaka;
use Illuminate\Http\Request;
use App\Models\Powiadomienie;

class PowiadomienieController extends Controller
{
    public function index()
    {
        $odznaka = Odznaka::all();
        $pasmo = Pasmo::all();
        $grupy = Grupa::all();
        return view('dashboard', compact('odznaka', 'pasmo', 'grupy'));
    }
}
