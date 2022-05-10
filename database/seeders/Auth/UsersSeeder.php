<?php

namespace Database\Seeders\Auth;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Klient;
use App\Models\Ksiazeczka;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $user = User::create([
            'email' => 'admin.testowy@localhost',
            'password' => Hash::make('12345678'),
            'imie' => 'Admin',
            'nazwisko' => 'testowy',
            'telefon' => '123456789',
            'punkty' => 0,
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Ksiazeczka::create([
            'id_turysty' => $user->id
        ]);

        $adminRole = Role::findByName(config('app.admin_role'));
        if (isset($adminRole)){
            $user->assignRole($adminRole);
        }

        $user = User::create([
            'email' => 'user.testowy@localhost',
            'password' => Hash::make('12345678'),
            'imie' => 'User',
            'nazwisko' => 'Testowy',
            'telefon' => '123456789',
            'punkty' => 0,
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Ksiazeczka::create([
            'id_turysty' => $user->id
        ]);

        $userRole = Role::findByName(config('app.user_role'));
        if (isset($userRole)){
            $user->assignRole($userRole);
        }

        $user = User::create([
            'email' => 'przodownik@localhost',
            'password' => Hash::make('12345678'),
            'imie' => 'Janusz',
            'nazwisko' => 'Szybki',
            'telefon' => '123456789',
            'punkty' => 0,
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Ksiazeczka::create([
            'id_turysty' => $user->id
        ]);

        $userRole = Role::findByName(config('app.przodownik_role'));
        if (isset($userRole)){
            $user->assignRole($userRole);
        }

        $user = User::create([
            'email' => 'test11@localhost',
            'password' => Hash::make('12345678'),
            'imie' => 'Janusz',
            'nazwisko' => 'Wolny',
            'telefon' => '123456789',
            'punkty' => 0,
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        Ksiazeczka::create([
            'id_turysty' => $user->id
        ]);
        
        $userRole = Role::findByName(config('app.user_role'));
        if (isset($userRole)){
            $user->assignRole($userRole);
        }
    }
}
