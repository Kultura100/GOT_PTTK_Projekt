<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Powiadomienie;

class PowiadomienieController extends Controller
{
    public function index()
    {
        $powiadomienie = Powiadomienie::get();
        return view('dashboard',compact('powiadomienie'));
    }
}
