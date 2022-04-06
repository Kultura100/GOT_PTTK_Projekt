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
        $this->call(RolesSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(UsersSeeder::class);

        $this->call(OdznakaSeeder::class);
        $this->call(Odznaka_TurystySeeder::class);
        $this->call(GrupaSeeder::class);
        $this->call(Grupa_PrzodownikSeeder::class);
        $this->call(PunktSeeder::class);
        $this->call(PodPunktSeeder::class);
   
        //$this->call(ListaPodPunktSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(PasmoSeeder::class);
        $this->call(OdcinekSeeder::class);
        $this->call(WycieczkaSeeder::class);
        $this->call(Wycieczka_odcinekSeeder::class);
        $this->call(ZdjeciaSeeder::class);
 
    }
}
