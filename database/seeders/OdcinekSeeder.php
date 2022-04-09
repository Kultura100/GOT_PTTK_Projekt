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
            ['id_punkt_poczatek' => 1,'id_punkt_koniec' => 1,'punkty_od' => 3,'punkty_do' => 6,'id_pasma' => 1],
            ['id_punkt_poczatek' => 1,'id_punkt_koniec' => 2,'punkty_od' => 4,'punkty_do' => 6,'id_pasma' => 1],
            ['id_punkt_poczatek' => 1,'id_punkt_koniec' => 3,'punkty_od' => 2,'punkty_do' => 4,'id_pasma' => 1],
            ['id_punkt_poczatek' => 1,'id_punkt_koniec' => 4,'punkty_od' => 3,'punkty_do' => 3,'id_pasma' => 1],

            ['id_punkt_poczatek' => 2,'id_punkt_koniec' => 5,'punkty_od' => 4,'punkty_do' => 3,'id_pasma' => 1],
            ['id_punkt_poczatek' => 2,'id_punkt_koniec' => 6,'punkty_od' => 1,'punkty_do' => 1,'id_pasma' => 1],

            ['id_punkt_poczatek' => 3,'id_punkt_koniec' => 7,'punkty_od' => 4,'punkty_do' => 4,'id_pasma' => 1],
            ['id_punkt_poczatek' => 3,'id_punkt_koniec' => 8,'punkty_od' => 1,'punkty_do' => 2,'id_pasma' => 1],

            ['id_punkt_poczatek' => 4,'id_punkt_koniec' => 9,'punkty_od' => 3,'punkty_do' => 5,'id_pasma' => 1],
            ['id_punkt_poczatek' => 4,'id_punkt_koniec' => 10,'punkty_od' => 2,'punkty_do' => 4,'id_pasma' => 1],
            ['id_punkt_poczatek' => 4,'id_punkt_koniec' => 11,'punkty_od' => 6,'punkty_do' => 4,'id_pasma' => 1],
            ['id_punkt_poczatek' => 4,'id_punkt_koniec' => 12,'punkty_od' => 8,'punkty_do' => 7,'id_pasma' => 1],

            ['id_punkt_poczatek' => 5,'id_punkt_koniec' => 13,'punkty_od' => 7,'punkty_do' => 4,'id_pasma' => 1],
            ['id_punkt_poczatek' => 5,'id_punkt_koniec' => 14,'punkty_od' => 3,'punkty_do' => 5,'id_pasma' => 1],
            
            ['id_punkt_poczatek' => 6,'id_punkt_koniec' => 15,'punkty_od' => 3,'punkty_do' => 4,'id_pasma' => 1],
            ['id_punkt_poczatek' => 6,'id_punkt_koniec' => 16,'punkty_od' => 4,'punkty_do' => 2,'id_pasma' => 1],
            ['id_punkt_poczatek' => 6,'id_punkt_koniec' => 17,'punkty_od' => 1,'punkty_do' => 2,'id_pasma' => 1],

            ['id_punkt_poczatek' => 7,'id_punkt_koniec' => 18,'punkty_od' => 5,'punkty_do' => 8,'id_pasma' => 1],
            ['id_punkt_poczatek' => 7,'id_punkt_koniec' => 19,'punkty_od' => 2,'punkty_do' => 2,'id_pasma' => 1],

            ['id_punkt_poczatek' => 8,'id_punkt_koniec' => 20,'punkty_od' => 2,'punkty_do' => 4,'id_pasma' => 1],
            ['id_punkt_poczatek' => 8,'id_punkt_koniec' => 21,'punkty_od' => 13,'punkty_do' => 4,'id_pasma' => 1],
            ['id_punkt_poczatek' => 8,'id_punkt_koniec' => 22,'punkty_od' => 10,'punkty_do' => 3,'id_pasma' => 1],

            ['id_punkt_poczatek' => 9,'id_punkt_koniec' => 23,'punkty_od' => 2,'punkty_do' => 6,'id_pasma' => 1],
            ['id_punkt_poczatek' => 9,'id_punkt_koniec' => 24,'punkty_od' => 3,'punkty_do' => 1,'id_pasma' => 1],

            ['id_punkt_poczatek' => 10,'id_punkt_koniec' => 25,'punkty_od' => 1,'punkty_do' => 1,'id_pasma' => 1],
            ['id_punkt_poczatek' => 10,'id_punkt_koniec' => 26,'punkty_od' => 3,'punkty_do' => 8,'id_pasma' => 1],
            ['id_punkt_poczatek' => 10,'id_punkt_koniec' => 27,'punkty_od' => 1,'punkty_do' => 4,'id_pasma' => 1],

            ['id_punkt_poczatek' => 11,'id_punkt_koniec' => 28,'punkty_od' => 1,'punkty_do' => 1,'id_pasma' => 1],
            ['id_punkt_poczatek' => 11,'id_punkt_koniec' => 29,'punkty_od' => 5,'punkty_do' => 9,'id_pasma' => 1],
            ['id_punkt_poczatek' => 11,'id_punkt_koniec' => 30,'punkty_od' => 1,'punkty_do' => 3,'id_pasma' => 1],

            ['id_punkt_poczatek' => 12,'id_punkt_koniec' => 31,'punkty_od' => 1,'punkty_do' => 1,'id_pasma' => 1],
            ['id_punkt_poczatek' => 12,'id_punkt_koniec' => 32,'punkty_od' => 4,'punkty_do' => 10,'id_pasma' => 1],

            ['id_punkt_poczatek' => 13,'id_punkt_koniec' => 33,'punkty_od' => 2,'punkty_do' => 8,'id_pasma' => 1],
            ['id_punkt_poczatek' => 13,'id_punkt_koniec' => 34,'punkty_od' => 3,'punkty_do' => 3,'id_pasma' => 1],

            ['id_punkt_poczatek' => 14,'id_punkt_koniec' => 35,'punkty_od' => 2,'punkty_do' => 6,'id_pasma' => 1],
            ['id_punkt_poczatek' => 14,'id_punkt_koniec' => 36,'punkty_od' => 1,'punkty_do' => 3,'id_pasma' => 1],
            ['id_punkt_poczatek' => 14,'id_punkt_koniec' => 37,'punkty_od' => 3,'punkty_do' => 3,'id_pasma' => 1],

            ['id_punkt_poczatek' => 15,'id_punkt_koniec' => 38,'punkty_od' => 3,'punkty_do' => 8,'id_pasma' => 1],
            ['id_punkt_poczatek' => 15,'id_punkt_koniec' => 39,'punkty_od' => 3,'punkty_do' => 7,'id_pasma' => 1],
            
            ['id_punkt_poczatek' => 16,'id_punkt_koniec' => 40,'punkty_od' => 3,'punkty_do' => 4,'id_pasma' => 1],
            ['id_punkt_poczatek' => 16,'id_punkt_koniec' => 41,'punkty_od' => 1,'punkty_do' => 4,'id_pasma' => 1],

            ['id_punkt_poczatek' => 17,'id_punkt_koniec' => 42,'punkty_od' => 2,'punkty_do' => 3,'id_pasma' => 1],
            ['id_punkt_poczatek' => 17,'id_punkt_koniec' => 43,'punkty_od' => 1,'punkty_do' => 5,'id_pasma' => 1],

            ['id_punkt_poczatek' => 18,'id_punkt_koniec' => 44,'punkty_od' => 2,'punkty_do' => 2,'id_pasma' => 1],
            ['id_punkt_poczatek' => 18,'id_punkt_koniec' => 45,'punkty_od' => 6,'punkty_do' => 2,'id_pasma' => 1],

            ['id_punkt_poczatek' => 19,'id_punkt_koniec' => 46,'punkty_od' => 1,'punkty_do' => 1,'id_pasma' => 1],
            ['id_punkt_poczatek' => 19,'id_punkt_koniec' => 47,'punkty_od' => 1,'punkty_do' => 4,'id_pasma' => 1],

            ['id_punkt_poczatek' => 20,'id_punkt_koniec' => 48,'punkty_od' => 6,'punkty_do' => 6,'id_pasma' => 1],
            ['id_punkt_poczatek' => 20,'id_punkt_koniec' => 49,'punkty_od' => 2,'punkty_do' => 2,'id_pasma' => 1],
            ['id_punkt_poczatek' => 20,'id_punkt_koniec' => 50,'punkty_od' => 2,'punkty_do' => 8,'id_pasma' => 1],

            ['id_punkt_poczatek' => 21,'id_punkt_koniec' => 51,'punkty_od' => 4,'punkty_do' => 9,'id_pasma' => 1],
            ['id_punkt_poczatek' => 21,'id_punkt_koniec' => 52,'punkty_od' => 3,'punkty_do' => 8,'id_pasma' => 1],
            ['id_punkt_poczatek' => 21,'id_punkt_koniec' => 53,'punkty_od' => 6,'punkty_do' => 6,'id_pasma' => 1],
            
            ['id_punkt_poczatek' => 22,'id_punkt_koniec' => 54,'punkty_od' => 4,'punkty_do' => 1,'id_pasma' => 1],
            ['id_punkt_poczatek' => 22,'id_punkt_koniec' => 55,'punkty_od' => 1,'punkty_do' => 3,'id_pasma' => 1],
            ['id_punkt_poczatek' => 22,'id_punkt_koniec' => 56,'punkty_od' => 1,'punkty_do' => 3,'id_pasma' => 1],

            ['id_punkt_poczatek' => 23,'id_punkt_koniec' => 57,'punkty_od' => 5,'punkty_do' => 2,'id_pasma' => 1],
            ['id_punkt_poczatek' => 23,'id_punkt_koniec' => 58,'punkty_od' => 1,'punkty_do' => 2,'id_pasma' => 1],
            ['id_punkt_poczatek' => 23,'id_punkt_koniec' => 59,'punkty_od' => 3,'punkty_do' => 1,'id_pasma' => 1],

            ['id_punkt_poczatek' => 24,'id_punkt_koniec' => 60,'punkty_od' => 3,'punkty_do' => 2,'id_pasma' => 1],
            ['id_punkt_poczatek' => 24,'id_punkt_koniec' => 61,'punkty_od' => 6,'punkty_do' => 4,'id_pasma' => 1],

        ];
        DB::table('odcinek')->insert($dane);
    }
}
