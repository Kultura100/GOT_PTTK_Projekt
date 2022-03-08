<?php

namespace Database\Seeders\Auth;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;

Class PermissionsSeeder extends Seeder
{
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'log-viewer']);
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.store']);
        Permission::create(['name' => 'users.destroy']);
        Permission::create(['name' => 'users.change_role']);

        Permission::create(['name' => 'rejestracja.index']);
        Permission::create(['name' => 'rejestracja.store']);

        Permission::create(['name' => 'zamowienie.index']);
        Permission::create(['name' => 'zamowienie.store']);
        Permission::create(['name' => 'zamowienie.destroy']);

        Permission::create(['name' => 'towar.index']);
        Permission::create(['name' => 'towar.store']);
        Permission::create(['name' => 'towar.destroy']);

        Permission::create(['name' => 'klient.index']);
        Permission::create(['name' => 'klient.store']);
        Permission::create(['name' => 'klient.destroy']);

        $userRole = Role::findByName(config('app.admin_role'));
        $userRole->givePermissionTo('users.index');
        $userRole->givePermissionTo('users.store');
        $userRole->givePermissionTo('users.destroy');
        $userRole->givePermissionTo('users.change_role');
        $userRole->givePermissionTo('log-viewer');
    
        $userRole->givePermissionTo('zamowienie.index');
        $userRole->givePermissionTo('zamowienie.store');
        $userRole->givePermissionTo('zamowienie.destroy');

        $userRole->givePermissionTo('towar.index');
        $userRole->givePermissionTo('towar.store');
        $userRole->givePermissionTo('towar.destroy');

        $userRole->givePermissionTo('klient.index');
        $userRole->givePermissionTo('klient.store');
        $userRole->givePermissionTo('klient.destroy');

        $userRole->givePermissionTo('rejestracja.index');
        $userRole->givePermissionTo('rejestracja.store');

        $userRole = Role::findByName(config('app.user_role'));
        $userRole->givePermissionTo('klient.index');
        $userRole->givePermissionTo('klient.store');
        // $userRole->givePermissionTo('towar.index');
        // $userRole->givePermissionTo('zamowienie.index');
        // $userRole->givePermissionTo('rejestracja.index');
        // $userRole->givePermissionTo('rejestracja.store');
    }
}