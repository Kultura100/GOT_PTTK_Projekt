<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\QueryException;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Requests\Klient\KlientRequest;

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
        return view('klient.create',
        [
            'klienci' => User::all(),
        ]);
    }

    public function store(KlientRequest $request)
    {   
        try
        {
        $klienci = User::create(
            $request->all()
        );

    $user = User::create([
        'name' => $request->Imie.' '.$request->Nazwisko,
        'email' => $request->Email,
        'password' => Hash::make($request->Haslo),
    ]);

    event(new Registered($user));
    
     return redirect()->route('klient.index')
        ->with('success', __('translations.klient.flashes.success.stored', [
        'nazwisko' => $klienci->Imie." ".$klienci->Nazwisko,
    ]));
    } catch (\Illuminate\Database\QueryException $e) {
        \Log::error($e);
        switch($e->getCode()){
            case '23000':
                return redirect()->route('klient.index')
                ->with('error', __('translations.klient.flashes.error.duplicate_entry', [
                    'nazwisko' =>$request->Imie." ".$request->Nazwisko,
            ])); 
                break;
                default:
                return redirect()->route('klient.index')
                ->with('error', __('translations.klient.flashes.success.nothing-changed', [
                    'nazwisko' => $request->Imie." ".$request->Nazwisko,
            ])); 
        }
    }
}

    public function edit($id)
    {
        $edit = true;
        $klient = Klient::where('id',$id)->firstOrFail();
        return view('klient.create',compact('klient',['edit']));
    }

    public function update(KlientRequest $request, $id)
    {
        $klienci = Klient::findOrFail($id);
        $haslo = $request->input('Haslo');
        
        if($haslo == $klienci->Haslo){
            $user = User::where('email', $klienci->Email)->update(['name' => $request->input('Imie')." ".$request->input('Nazwisko') ,'email' => $request->input('Email')]);   
        } else
        $user = User::where('email', $klienci->Email)->update(['name' => $request->input('Imie')." ".$request->input('Nazwisko') ,'email' => $request->input('Email'), 'password' => Hash::make($haslo)]);
        event(new PasswordReset($user));

        
        $klienci->Imie = $request->input('Imie');
        $klienci->Nazwisko = $request->input('Nazwisko');
        $klienci->Nazwa = $request->input('Nazwa');
        $klienci->NIP = $request->input('NIP');
        $klienci->Telefon = $request->input('Telefon');
        $klienci->Ulica = $request->input('Ulica');
        $klienci->NumerDomu = $request->input('NumerDomu');
        $klienci->NumerLokalu = $request->input('NumerLokalu');
        $klienci->KodPocztowy = $request->input('KodPocztowy');
        $klienci->Miejscowosc = $request->input('Miejscowosc');
        $klienci->Email = $request->input('Email');
        $klienci->Haslo = Hash::make($request->input('Haslo'));
        $klienci->save();


     return redirect()->route('klient.index')
        ->with('success', __('translations.klient.flashes.success.updated', [
            'nazwisko' => $klienci->Imie." ".$klienci->Nazwisko,
    ]));

    }
}
