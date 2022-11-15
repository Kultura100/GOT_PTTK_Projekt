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
        //Permission::create(['name' => 'klient.store']);
        Permission::create(['name' => 'admin.all']);
        Permission::create(['name' => 'szlak.index']);
        Permission::create(['name' => 'wycieczki.index']);
        Permission::create(['name' => 'ranking.index']);
        Permission::create(['name' => 'raport.index']);
        Permission::create(['name' => 'obowiazki.index']);
        Permission::create(['name' => 'listaturystow.index']);
        Permission::create(['name' => 'osiagniecia.index']);
        Permission::create(['name' => 'odznaki.index']);
        Permission::create(['name' => 'log-viewer']);

        


       

       
        //Uzytkownik
        $userRole = Role::findByName(config('app.user_role'));
        $userRole->givePermissionTo('klient.index');
        $userRole->givePermissionTo('szlak.index');
        $userRole->givePermissionTo('wycieczki.index');
        $userRole->givePermissionTo('ranking.index');
        $userRole->givePermissionTo('raport.index');
        //$userRole->givePermissionTo('obowiazki.index');
        //$userRole->givePermissionTo('listaturystow.index');
        $userRole->givePermissionTo('osiagniecia.index');
        $userRole->givePermissionTo('odznaki.index');


        //Przodownik
        $userRole = Role::findByName(config('app.przodownik_role'));
        $userRole->givePermissionTo('klient.index');
        $userRole->givePermissionTo('szlak.index');
        $userRole->givePermissionTo('wycieczki.index');
        $userRole->givePermissionTo('ranking.index');
        $userRole->givePermissionTo('raport.index');
        $userRole->givePermissionTo('obowiazki.index');
        $userRole->givePermissionTo('listaturystow.index');
        $userRole->givePermissionTo('osiagniecia.index');
        $userRole->givePermissionTo('odznaki.index');

        //Administrator
        $userRole = Role::findByName(config('app.admin_role'));        
        $userRole->givePermissionTo('log-viewer'); 
        $userRole->givePermissionTo('admin.all');        
        $userRole->givePermissionTo('klient.index');
        $userRole->givePermissionTo('szlak.index');
        $userRole->givePermissionTo('wycieczki.index');
        $userRole->givePermissionTo('ranking.index');
        $userRole->givePermissionTo('raport.index');
        $userRole->givePermissionTo('obowiazki.index');
        $userRole->givePermissionTo('listaturystow.index');
        $userRole->givePermissionTo('osiagniecia.index');
        $userRole->givePermissionTo('odznaki.index');
       
    }
}