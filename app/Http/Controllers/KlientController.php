<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\QueryException;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Requests\Uzytkownik\UzytkownikRequest;

class KlientController extends Controller
{
    public function index()
    {
        $user = Auth::user();
            if ($user->cannot('log-viewer'))
            {
                return view('uzytkownik.index',[
                    'klienci' => User::where('Email',Auth::user()->email)->get()
                ]);
            }
            else
            {
            return view(
                'uzytkownik.index',
                [
                    'klienci' => User::paginate(config('app.paginacja'))
                ]
            );
    }
}

    public function create(){
        return view('uzytkownik.create',
        [
            'klienci' => User::all(),
        ]);
    }

    public function store(UzytkownikRequest $request)
    {   
        try
        {
        $klienci = User::create(
            $request->all()
        );

    event(new Registered($klienci));
    
     return redirect()->route('uzytkownik.index')
        ->with('success', __('translations.uzytkownik.flashes.success.stored', [
        'nazwisko' => $klienci->imie." ".$klienci->nazwisko,
    ]));
    } catch (\Illuminate\Database\QueryException $e) {
        \Log::error($e);
        switch($e->getCode()){
            case '23000':
                return redirect()->route('uzytkownik.index')
                ->with('error', __('translations.uzytkownik.flashes.error.duplicate_entry', [
                    'nazwisko' =>$request->imie." ".$request->nazwisko,
            ])); 
                break;
                default:
                return redirect()->route('uzytkownik.index')
                ->with('error', __('translations.uzytkownik.flashes.success.nothing-changed', [
                    'nazwisko' => $request->imie." ".$request->nazwisko,
            ])); 
        }
    }
}

    public function edit($id)
    {
        $edit = true;
        $klient = User::where('id',$id)->firstOrFail();
        return view('uzytkownik.create',compact('klient',['edit']));
    }

    public function update(UzytkownikRequest $request, $id)
    {
        $klienci = User::findOrFail($id);
        $klienci->email = $request->input('email');
        $klienci->password = Hash::make($request->input('password'));
        $klienci->imie = $request->input('imie');
        $klienci->nazwisko = $request->input('nazwisko');
        $klienci->telefon = $request->input('telefon');
        $klienci->save();

     return redirect()->route('uzytkownik.index')
        ->with('success', __('translations.uzytkownik.flashes.success.updated', [
            'nazwisko' => $klienci->imie." ".$klienci->nazwisko,
    ]));

    }
}
