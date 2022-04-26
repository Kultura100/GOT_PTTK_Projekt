<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ListaTurystowController extends Controller
{
    public function index()
    {
        $uzytkownicy = User::role('user')->get();
        return view('listaturystow.index',compact('uzytkownicy'));
    }
}
