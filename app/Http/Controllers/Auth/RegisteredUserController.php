<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Ksiazeczka;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\Rules\Password;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $request->validate([
            'imie' => ['required', 'string', 'max:255'],
            'nazwisko' => ['required', 'string', 'max:255'],
            'telefon' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required',Password::min(8)->mixedCase()->numbers(), 'confirmed'],
        ]);
        //dd($request->imie);
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'imie' => $request->imie,
            'nazwisko' => $request->nazwisko,
            'telefon' => $request->telefon,
        ]);

        Ksiazeczka::create([
            'id_turysty' => $user->id
        ]);

        $userRole = Role::findByName(config('app.user_role'));
        if (isset($userRole)){
            $user->assignRole($userRole);
        }
        
        event(new Registered($user));
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
