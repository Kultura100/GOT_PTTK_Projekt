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

        //Przodownik
        Permission::create(['name' => 'przodownik.index']);
        Permission::create(['name' => 'przodownik.store']);
        Permission::create(['name' => 'przodownik.destroy']);

        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.store']);
        Permission::create(['name' => 'users.destroy']);
        Permission::create(['name' => 'users.change_role']);

        Permission::create(['name' => 'klient.index']);
        Permission::create(['name' => 'klient.store']);


        //Uzytkownik
        $userRole = Role::findByName(config('app.user_role'));
        $userRole->givePermissionTo('klient.index');
        $userRole->givePermissionTo('klient.store');

        //Przodownik
        $userRole = Role::findByName(config('app.przodownik_role'));

        //Administrator
        $userRole = Role::findByName(config('app.admin_role'));
        $userRole->givePermissionTo('users.index');
        $userRole->givePermissionTo('users.store');
        $userRole->givePermissionTo('users.destroy');
        $userRole->givePermissionTo('users.change_role');
    }
}