<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Database\Seeders\GrupaSeeder;
use Database\Seeders\PasmoSeeder;
use Database\Seeders\PunktSeeder;
use Database\Seeders\StatusSeeder;
use Database\Seeders\OdcinekSeeder;
use Database\Seeders\ZdjeciaSeeder;
use Database\Seeders\PodPunktSeeder;
use Database\Seeders\WycieczkaSeeder;
use Database\Seeders\Auth\RolesSeeder;
use Database\Seeders\Auth\UsersSeeder;
use Database\Seeders\ListaPodPunktSeeder;
use Database\Seeders\Odznaka_TurystySeeder;
use Database\Seeders\Auth\PermissionsSeeder;
use Database\Seeders\Grupa_PrzodownikSeeder;
use Database\Seeders\Wycieczka_odcinekSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesSeeder::class,
            PermissionsSeeder::class,
            UsersSeeder::class,
            OdznakaSeeder::class,
            //Odznaka_TurystySeeder::class,
            GrupaSeeder::class,
            Grupa_PrzodownikSeeder::class,
            PunktSeeder::class,
            PodPunktSeeder::class,
            StatusSeeder::class,
            PasmoSeeder::class,
            OdcinekSeeder::class,
            WycieczkaSeeder::class,
            Wycieczka_odcinekSeeder::class,
            ZdjeciaSeeder::class,
        ]);
    }
}
