<?php

namespace App\Http\Controllers;

use App\Models\Odznaka;
use Illuminate\Http\Request;

class OdznakaController extends Controller
{
    public function index()
    {
        return view('odznaki.index',[
            'odznaki' => Odznaka::get(),
        ]);
    }
}
