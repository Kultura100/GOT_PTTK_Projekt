<?php

namespace Database\Seeders\Auth;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesSeeder extends Seeder
{
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        $admin = Role::create(['name' => config('app.admin_role')]);
        $przodownik = Role::create(['name' => config('app.przodownik_role')]);
        $user = Role::create(['name' => config('app.user_role')]);
    }
}