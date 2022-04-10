<?php

namespace Database\Seeders;

use App\Models\Odcinek;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OdcinekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dane = [
            ['id_punkt_koniec' => 1,'id_punkt_poczatek' => 1,'punkty_od' => 3,'punkty_do' => 6,'id_pasma' => 1],
            ['id_punkt_koniec' => 1,'id_punkt_poczatek' => 2,'punkty_od' => 4,'punkty_do' => 6,'id_pasma' => 1],
            ['id_punkt_koniec' => 1,'id_punkt_poczatek' => 3,'punkty_od' => 2,'punkty_do' => 4,'id_pasma' => 1],
            ['id_punkt_koniec' => 1,'id_punkt_poczatek' => 4,'punkty_od' => 3,'punkty_do' => 3,'id_pasma' => 1],

            ['id_punkt_koniec' => 2,'id_punkt_poczatek' => 5,'punkty_od' => 4,'punkty_do' => 3,'id_pasma' => 1],
            ['id_punkt_koniec' => 2,'id_punkt_poczatek' => 6,'punkty_od' => 1,'punkty_do' => 1,'id_pasma' => 1],

            ['id_punkt_koniec' => 3,'id_punkt_poczatek' => 7,'punkty_od' => 4,'punkty_do' => 4,'id_pasma' => 1],
            ['id_punkt_koniec' => 3,'id_punkt_poczatek' => 8,'punkty_od' => 1,'punkty_do' => 2,'id_pasma' => 1],

            ['id_punkt_koniec' => 4,'id_punkt_poczatek' => 9,'punkty_od' => 3,'punkty_do' => 5,'id_pasma' => 1],
            ['id_punkt_koniec' => 4,'id_punkt_poczatek' => 10,'punkty_od' => 2,'punkty_do' => 4,'id_pasma' => 1],
            ['id_punkt_koniec' => 4,'id_punkt_poczatek' => 11,'punkty_od' => 6,'punkty_do' => 4,'id_pasma' => 1],
            ['id_punkt_koniec' => 4,'id_punkt_poczatek' => 12,'punkty_od' => 8,'punkty_do' => 7,'id_pasma' => 1],

            ['id_punkt_koniec' => 5,'id_punkt_poczatek' => 13,'punkty_od' => 7,'punkty_do' => 4,'id_pasma' => 1],
            ['id_punkt_koniec' => 5,'id_punkt_poczatek' => 14,'punkty_od' => 3,'punkty_do' => 5,'id_pasma' => 1],
            
            ['id_punkt_koniec' => 6,'id_punkt_poczatek' => 15,'punkty_od' => 3,'punkty_do' => 4,'id_pasma' => 1],
            ['id_punkt_koniec' => 6,'id_punkt_poczatek' => 16,'punkty_od' => 4,'punkty_do' => 2,'id_pasma' => 1],
            ['id_punkt_koniec' => 6,'id_punkt_poczatek' => 17,'punkty_od' => 1,'punkty_do' => 2,'id_pasma' => 1],

            ['id_punkt_koniec' => 7,'id_punkt_poczatek' => 18,'punkty_od' => 5,'punkty_do' => 8,'id_pasma' => 1],
            ['id_punkt_koniec' => 7,'id_punkt_poczatek' => 19,'punkty_od' => 2,'punkty_do' => 2,'id_pasma' => 1],

            ['id_punkt_koniec' => 8,'id_punkt_poczatek' => 20,'punkty_od' => 2,'punkty_do' => 4,'id_pasma' => 1],
            ['id_punkt_koniec' => 8,'id_punkt_poczatek' => 21,'punkty_od' => 13,'punkty_do' => 4,'id_pasma' => 1],
            ['id_punkt_koniec' => 8,'id_punkt_poczatek' => 22,'punkty_od' => 10,'punkty_do' => 3,'id_pasma' => 1],

            ['id_punkt_koniec' => 9,'id_punkt_poczatek' => 23,'punkty_od' => 2,'punkty_do' => 6,'id_pasma' => 1],
            ['id_punkt_koniec' => 9,'id_punkt_poczatek' => 24,'punkty_od' => 3,'punkty_do' => 1,'id_pasma' => 1],

            ['id_punkt_koniec' => 10,'id_punkt_poczatek' => 25,'punkty_od' => 1,'punkty_do' => 1,'id_pasma' => 1],
            ['id_punkt_koniec' => 10,'id_punkt_poczatek' => 26,'punkty_od' => 3,'punkty_do' => 8,'id_pasma' => 1],
            ['id_punkt_koniec' => 10,'id_punkt_poczatek' => 27,'punkty_od' => 1,'punkty_do' => 4,'id_pasma' => 1],

            ['id_punkt_koniec' => 11,'id_punkt_poczatek' => 28,'punkty_od' => 1,'punkty_do' => 1,'id_pasma' => 1],
            ['id_punkt_koniec' => 11,'id_punkt_poczatek' => 29,'punkty_od' => 5,'punkty_do' => 9,'id_pasma' => 1],
            ['id_punkt_koniec' => 11,'id_punkt_poczatek' => 30,'punkty_od' => 1,'punkty_do' => 3,'id_pasma' => 1],

            ['id_punkt_koniec' => 12,'id_punkt_poczatek' => 31,'punkty_od' => 1,'punkty_do' => 1,'id_pasma' => 1],
            ['id_punkt_koniec' => 12,'id_punkt_poczatek' => 32,'punkty_od' => 4,'punkty_do' => 10,'id_pasma' => 1],

            ['id_punkt_koniec' => 13,'id_punkt_poczatek' => 33,'punkty_od' => 2,'punkty_do' => 8,'id_pasma' => 1],
            ['id_punkt_koniec' => 13,'id_punkt_poczatek' => 34,'punkty_od' => 3,'punkty_do' => 3,'id_pasma' => 1],

            ['id_punkt_koniec' => 14,'id_punkt_poczatek' => 35,'punkty_od' => 2,'punkty_do' => 6,'id_pasma' => 1],
            ['id_punkt_koniec' => 14,'id_punkt_poczatek' => 36,'punkty_od' => 1,'punkty_do' => 3,'id_pasma' => 1],
            ['id_punkt_koniec' => 14,'id_punkt_poczatek' => 37,'punkty_od' => 3,'punkty_do' => 3,'id_pasma' => 1],

            ['id_punkt_koniec' => 15,'id_punkt_poczatek' => 38,'punkty_od' => 3,'punkty_do' => 8,'id_pasma' => 1],
            ['id_punkt_koniec' => 15,'id_punkt_poczatek' => 39,'punkty_od' => 3,'punkty_do' => 7,'id_pasma' => 1],
            
            ['id_punkt_koniec' => 16,'id_punkt_poczatek' => 40,'punkty_od' => 3,'punkty_do' => 4,'id_pasma' => 1],
            ['id_punkt_koniec' => 16,'id_punkt_poczatek' => 41,'punkty_od' => 1,'punkty_do' => 4,'id_pasma' => 1],

            ['id_punkt_koniec' => 17,'id_punkt_poczatek' => 42,'punkty_od' => 2,'punkty_do' => 3,'id_pasma' => 1],
            ['id_punkt_koniec' => 17,'id_punkt_poczatek' => 43,'punkty_od' => 1,'punkty_do' => 5,'id_pasma' => 1],

            ['id_punkt_koniec' => 18,'id_punkt_poczatek' => 44,'punkty_od' => 2,'punkty_do' => 2,'id_pasma' => 1],
            ['id_punkt_koniec' => 18,'id_punkt_poczatek' => 45,'punkty_od' => 6,'punkty_do' => 2,'id_pasma' => 1],

            ['id_punkt_koniec' => 19,'id_punkt_poczatek' => 46,'punkty_od' => 1,'punkty_do' => 1,'id_pasma' => 1],
            ['id_punkt_koniec' => 19,'id_punkt_poczatek' => 47,'punkty_od' => 1,'punkty_do' => 4,'id_pasma' => 1],

            ['id_punkt_koniec' => 20,'id_punkt_poczatek' => 48,'punkty_od' => 6,'punkty_do' => 6,'id_pasma' => 1],
            ['id_punkt_koniec' => 20,'id_punkt_poczatek' => 49,'punkty_od' => 2,'punkty_do' => 2,'id_pasma' => 1],
            ['id_punkt_koniec' => 20,'id_punkt_poczatek' => 50,'punkty_od' => 2,'punkty_do' => 8,'id_pasma' => 1],

            ['id_punkt_koniec' => 21,'id_punkt_poczatek' => 51,'punkty_od' => 4,'punkty_do' => 9,'id_pasma' => 1],
            ['id_punkt_koniec' => 21,'id_punkt_poczatek' => 52,'punkty_od' => 3,'punkty_do' => 8,'id_pasma' => 1],
            ['id_punkt_koniec' => 21,'id_punkt_poczatek' => 53,'punkty_od' => 6,'punkty_do' => 6,'id_pasma' => 1],
            
            ['id_punkt_koniec' => 22,'id_punkt_poczatek' => 54,'punkty_od' => 4,'punkty_do' => 1,'id_pasma' => 1],
            ['id_punkt_koniec' => 22,'id_punkt_poczatek' => 55,'punkty_od' => 1,'punkty_do' => 3,'id_pasma' => 1],
            ['id_punkt_koniec' => 22,'id_punkt_poczatek' => 56,'punkty_od' => 1,'punkty_do' => 3,'id_pasma' => 1],

            ['id_punkt_koniec' => 23,'id_punkt_poczatek' => 57,'punkty_od' => 5,'punkty_do' => 2,'id_pasma' => 1],
            ['id_punkt_koniec' => 23,'id_punkt_poczatek' => 58,'punkty_od' => 1,'punkty_do' => 2,'id_pasma' => 1],
            ['id_punkt_koniec' => 23,'id_punkt_poczatek' => 59,'punkty_od' => 3,'punkty_do' => 1,'id_pasma' => 1],

            ['id_punkt_koniec' => 24,'id_punkt_poczatek' => 60,'punkty_od' => 3,'punkty_do' => 2,'id_pasma' => 1],
            ['id_punkt_koniec' => 24,'id_punkt_poczatek' => 61,'punkty_od' => 6,'punkty_do' => 4,'id_pasma' => 1],

        ];
        DB::table('odcinek')->insert($dane);
    }
}
