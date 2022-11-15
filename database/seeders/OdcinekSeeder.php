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
            ['id_punkt_koniec' => 1,'id_punkt_poczatek' => 1,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 1],
            ['id_punkt_koniec' => 1,'id_punkt_poczatek' => 2,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 1],
            ['id_punkt_koniec' => 1,'id_punkt_poczatek' => 3,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 1],
            ['id_punkt_koniec' => 1,'id_punkt_poczatek' => 4,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 1],

            ['id_punkt_koniec' => 2,'id_punkt_poczatek' => 5,'punkty_do' => 3,'punkty_od' => 4,'id_pasma' => 1],
            ['id_punkt_koniec' => 2,'id_punkt_poczatek' => 6,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 1],

            ['id_punkt_koniec' => 3,'id_punkt_poczatek' => 7,'punkty_do' => 4,'punkty_od' => 1,'id_pasma' => 1],
            ['id_punkt_koniec' => 3,'id_punkt_poczatek' => 8,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 1],

            ['id_punkt_koniec' => 4,'id_punkt_poczatek' => 9,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 1],
            ['id_punkt_koniec' => 4,'id_punkt_poczatek' => 10,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 1],
            ['id_punkt_koniec' => 4,'id_punkt_poczatek' => 11,'punkty_do' => 4,'punkty_od' => 6,'id_pasma' => 1],
            ['id_punkt_koniec' => 4,'id_punkt_poczatek' => 12,'punkty_do' => 7,'punkty_od' => 8,'id_pasma' => 1],

            ['id_punkt_koniec' => 5,'id_punkt_poczatek' => 13,'punkty_do' => 4,'punkty_od' => 7,'id_pasma' => 1],
            ['id_punkt_koniec' => 5,'id_punkt_poczatek' => 14,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 1],
            
            ['id_punkt_koniec' => 6,'id_punkt_poczatek' => 15,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 1],
            ['id_punkt_koniec' => 6,'id_punkt_poczatek' => 16,'punkty_do' => 2,'punkty_od' => 4,'id_pasma' => 1],
            ['id_punkt_koniec' => 6,'id_punkt_poczatek' => 17,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 1],

            ['id_punkt_koniec' => 7,'id_punkt_poczatek' => 18,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 1],
            ['id_punkt_koniec' => 7,'id_punkt_poczatek' => 19,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 1],

            ['id_punkt_koniec' => 8,'id_punkt_poczatek' => 20,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 1],
            ['id_punkt_koniec' => 8,'id_punkt_poczatek' => 21,'punkty_do' => 4,'punkty_od' => 13,'id_pasma' => 1],
            ['id_punkt_koniec' => 8,'id_punkt_poczatek' => 22,'punkty_do' => 3,'punkty_od' => 10,'id_pasma' => 1],

            ['id_punkt_koniec' => 9,'id_punkt_poczatek' => 23,'punkty_do' => 6,'punkty_od' => 2,'id_pasma' => 1],
            ['id_punkt_koniec' => 9,'id_punkt_poczatek' => 24,'punkty_do' => 1,'punkty_od' => 3,'id_pasma' => 1],

            ['id_punkt_koniec' => 10,'id_punkt_poczatek' => 25,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 1],
            ['id_punkt_koniec' => 10,'id_punkt_poczatek' => 26,'punkty_do' => 8,'punkty_od' => 3,'id_pasma' => 1],
            ['id_punkt_koniec' => 10,'id_punkt_poczatek' => 27,'punkty_do' => 4,'punkty_od' => 1,'id_pasma' => 1],

            ['id_punkt_koniec' => 11,'id_punkt_poczatek' => 28,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 1],
            ['id_punkt_koniec' => 11,'id_punkt_poczatek' => 29,'punkty_do' => 9,'punkty_od' => 5,'id_pasma' => 1],
            ['id_punkt_koniec' => 11,'id_punkt_poczatek' => 30,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 1],

            ['id_punkt_koniec' => 12,'id_punkt_poczatek' => 31,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 1],
            ['id_punkt_koniec' => 12,'id_punkt_poczatek' => 32,'punkty_do' => 10,'punkty_od' => 4,'id_pasma' => 1],

            ['id_punkt_koniec' => 13,'id_punkt_poczatek' => 33,'punkty_do' => 8,'punkty_od' => 2,'id_pasma' => 1],
            ['id_punkt_koniec' => 13,'id_punkt_poczatek' => 34,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 1],

            ['id_punkt_koniec' => 14,'id_punkt_poczatek' => 35,'punkty_do' => 6,'punkty_od' => 2,'id_pasma' => 1],
            ['id_punkt_koniec' => 14,'id_punkt_poczatek' => 36,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 1],
            ['id_punkt_koniec' => 14,'id_punkt_poczatek' => 37,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 1],

            ['id_punkt_koniec' => 15,'id_punkt_poczatek' => 38,'punkty_do' => 8,'punkty_od' => 3,'id_pasma' => 1],
            ['id_punkt_koniec' => 15,'id_punkt_poczatek' => 39,'punkty_do' => 7,'punkty_od' => 3,'id_pasma' => 1],
            
            ['id_punkt_koniec' => 16,'id_punkt_poczatek' => 40,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 1],
            ['id_punkt_koniec' => 16,'id_punkt_poczatek' => 41,'punkty_do' => 4,'punkty_od' => 1,'id_pasma' => 1],

            ['id_punkt_koniec' => 17,'id_punkt_poczatek' => 42,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 1],
            ['id_punkt_koniec' => 17,'id_punkt_poczatek' => 43,'punkty_do' => 5,'punkty_od' => 1,'id_pasma' => 1],

            ['id_punkt_koniec' => 18,'id_punkt_poczatek' => 44,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 1],
            ['id_punkt_koniec' => 18,'id_punkt_poczatek' => 45,'punkty_do' => 2,'punkty_od' => 6,'id_pasma' => 1],

            ['id_punkt_koniec' => 19,'id_punkt_poczatek' => 46,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 1],
            ['id_punkt_koniec' => 19,'id_punkt_poczatek' => 47,'punkty_do' => 4,'punkty_od' => 1,'id_pasma' => 1],

            ['id_punkt_koniec' => 20,'id_punkt_poczatek' => 48,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 1],
            ['id_punkt_koniec' => 20,'id_punkt_poczatek' => 49,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 1],
            ['id_punkt_koniec' => 20,'id_punkt_poczatek' => 50,'punkty_do' => 8,'punkty_od' => 2,'id_pasma' => 1],

            ['id_punkt_koniec' => 21,'id_punkt_poczatek' => 51,'punkty_do' => 9,'punkty_od' => 4,'id_pasma' => 1],
            ['id_punkt_koniec' => 21,'id_punkt_poczatek' => 52,'punkty_do' => 8,'punkty_od' => 3,'id_pasma' => 1],
            ['id_punkt_koniec' => 21,'id_punkt_poczatek' => 53,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 1],
            
            ['id_punkt_koniec' => 22,'id_punkt_poczatek' => 54,'punkty_do' => 1,'punkty_od' => 4,'id_pasma' => 1],
            ['id_punkt_koniec' => 22,'id_punkt_poczatek' => 55,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 1],
            ['id_punkt_koniec' => 22,'id_punkt_poczatek' => 56,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 1],

            ['id_punkt_koniec' => 23,'id_punkt_poczatek' => 57,'punkty_do' => 2,'punkty_od' => 5,'id_pasma' => 1],
            ['id_punkt_koniec' => 23,'id_punkt_poczatek' => 58,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 1],
            ['id_punkt_koniec' => 23,'id_punkt_poczatek' => 59,'punkty_do' => 1,'punkty_od' => 3,'id_pasma' => 1],

            ['id_punkt_koniec' => 24,'id_punkt_poczatek' => 60,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 1],
            ['id_punkt_poczatek' => 61,'id_punkt_koniec' => 24,'punkty_do' => 4,'punkty_od' => 6,'id_pasma' => 1],
            //Pasmo 1
            //Pasmo 2
            ['id_punkt_poczatek' => 62,'id_punkt_koniec' => 25,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 2],
            ['id_punkt_poczatek' => 63,'id_punkt_koniec' => 25,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 2],
            ['id_punkt_poczatek' => 64,'id_punkt_koniec' => 25,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 2],
            ['id_punkt_poczatek' => 65,'id_punkt_koniec' => 25,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 2],
            ['id_punkt_poczatek' => 66,'id_punkt_koniec' => 25,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 2],
            ['id_punkt_poczatek' => 67,'id_punkt_koniec' => 25,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 2],
            ['id_punkt_poczatek' => 68,'id_punkt_koniec' => 25,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 2],
            ['id_punkt_poczatek' => 69,'id_punkt_koniec' => 25,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 2],
            ['id_punkt_poczatek' => 70,'id_punkt_koniec' => 25,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 2],
            ['id_punkt_poczatek' => 71,'id_punkt_koniec' => 25,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 2],

            ['id_punkt_poczatek' => 72,'id_punkt_koniec' => 26,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 2],

            ['id_punkt_poczatek' => 73,'id_punkt_koniec' => 27,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 2],
            ['id_punkt_poczatek' => 74,'id_punkt_koniec' => 27,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 2],
            ['id_punkt_poczatek' => 75,'id_punkt_koniec' => 27,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 2],

            ['id_punkt_poczatek' => 76,'id_punkt_koniec' => 28,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 2],
            ['id_punkt_poczatek' => 77,'id_punkt_koniec' => 28,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 2],
            ['id_punkt_poczatek' => 78,'id_punkt_koniec' => 28,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 2],

            ['id_punkt_poczatek' => 79,'id_punkt_koniec' => 29,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 2],
            ['id_punkt_poczatek' => 80,'id_punkt_koniec' => 29,'punkty_do' => 2,'punkty_od' => 5,'id_pasma' => 2],
            ['id_punkt_poczatek' => 81,'id_punkt_koniec' => 29,'punkty_do' => 2,'punkty_od' => 5,'id_pasma' => 2],

            ['id_punkt_poczatek' => 82,'id_punkt_koniec' => 30,'punkty_do' => 10,'punkty_od' => 3,'id_pasma' => 2],
            ['id_punkt_poczatek' => 83,'id_punkt_koniec' => 30,'punkty_do' => 6,'punkty_od' => 2,'id_pasma' => 2],
            ['id_punkt_poczatek' => 84,'id_punkt_koniec' => 30,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 2],

            //Pasmo3
            ['id_punkt_poczatek' => 85,'id_punkt_koniec' => 31,'punkty_do' => 14,'punkty_od' => 9,'id_pasma' => 3],
            ['id_punkt_poczatek' => 86,'id_punkt_koniec' => 31,'punkty_do' => 10,'punkty_od' => 6,'id_pasma' => 3],
            ['id_punkt_poczatek' => 87,'id_punkt_koniec' => 31,'punkty_do' => 9,'punkty_od' => 6,'id_pasma' => 3],

            ['id_punkt_poczatek' => 88,'id_punkt_koniec' => 32,'punkty_do' => 9,'punkty_od' => 4,'id_pasma' => 3],
            ['id_punkt_poczatek' => 89,'id_punkt_koniec' => 32,'punkty_do' => 12,'punkty_od' => 7,'id_pasma' => 3],
            ['id_punkt_poczatek' => 90,'id_punkt_koniec' => 32,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 3],
            ['id_punkt_poczatek' => 91,'id_punkt_koniec' => 32,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 3],
            ['id_punkt_poczatek' => 92,'id_punkt_koniec' => 32,'punkty_do' => 9,'punkty_od' => 5,'id_pasma' => 3],
            
            ['id_punkt_poczatek' => 93,'id_punkt_koniec' => 33,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 3],
            ['id_punkt_poczatek' => 94,'id_punkt_koniec' => 33,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 3],
            ['id_punkt_poczatek' => 95,'id_punkt_koniec' => 33,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 3],
            ['id_punkt_poczatek' => 96,'id_punkt_koniec' => 33,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 3],
            ['id_punkt_poczatek' => 97,'id_punkt_koniec' => 33,'punkty_do' => 15,'punkty_od' => 12,'id_pasma' => 3],
            ['id_punkt_poczatek' => 98,'id_punkt_koniec' => 33,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 3],
            ['id_punkt_poczatek' => 99,'id_punkt_koniec' => 33,'punkty_do' => 7,'punkty_od' => 3,'id_pasma' => 3],
            ['id_punkt_poczatek' => 100,'id_punkt_koniec' => 33,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 3],

            ['id_punkt_poczatek' => 101,'id_punkt_koniec' => 34,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 3],
            ['id_punkt_poczatek' => 102,'id_punkt_koniec' => 34,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 3],
            ['id_punkt_poczatek' => 103,'id_punkt_koniec' => 34,'punkty_do' => 19,'punkty_od' => 24,'id_pasma' => 3],
            ['id_punkt_poczatek' => 104,'id_punkt_koniec' => 34,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 3],
            ['id_punkt_poczatek' => 105,'id_punkt_koniec' => 34,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 3],
            ['id_punkt_poczatek' => 106,'id_punkt_koniec' => 34,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 3],

            ['id_punkt_poczatek' => 107,'id_punkt_koniec' => 35,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 3],
            ['id_punkt_poczatek' => 108,'id_punkt_koniec' => 35,'punkty_do' => 22,'punkty_od' => 20,'id_pasma' => 3],
            ['id_punkt_poczatek' => 109,'id_punkt_koniec' => 35,'punkty_do' => 22,'punkty_od' => 17,'id_pasma' => 3],

            ['id_punkt_poczatek' => 110,'id_punkt_koniec' => 36,'punkty_do' => 8,'punkty_od' => 9,'id_pasma' => 3],
            ['id_punkt_poczatek' => 111,'id_punkt_koniec' => 36,'punkty_do' => 7,'punkty_od' => 7,'id_pasma' => 3],
            ['id_punkt_poczatek' => 112,'id_punkt_koniec' => 36,'punkty_do' => 10,'punkty_od' => 9,'id_pasma' => 3],

            //Pasmo 4
            ['id_punkt_poczatek' => 113,'id_punkt_koniec' => 37,'punkty_do' => 13,'punkty_od' => 5,'id_pasma' => 4],
            ['id_punkt_poczatek' => 114,'id_punkt_koniec' => 37,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 4],
            ['id_punkt_poczatek' => 115,'id_punkt_koniec' => 37,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 4],
            ['id_punkt_poczatek' => 116,'id_punkt_koniec' => 37,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 4],

            ['id_punkt_poczatek' => 117,'id_punkt_koniec' => 38,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 4],
            ['id_punkt_poczatek' => 118,'id_punkt_koniec' => 38,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 4],
            ['id_punkt_poczatek' => 119,'id_punkt_koniec' => 38,'punkty_do' => 11,'punkty_od' => 4,'id_pasma' => 4],
            ['id_punkt_poczatek' => 120,'id_punkt_koniec' => 38,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 4],
            ['id_punkt_poczatek' => 121,'id_punkt_koniec' => 38,'punkty_do' => 15,'punkty_od' => 7,'id_pasma' => 4],
            ['id_punkt_poczatek' => 122,'id_punkt_koniec' => 38,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 4],

            ['id_punkt_poczatek' => 123,'id_punkt_koniec' => 39,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 4],
            ['id_punkt_poczatek' => 124,'id_punkt_koniec' => 39,'punkty_do' => 3,'punkty_od' => 5,'id_pasma' => 4],
            ['id_punkt_poczatek' => 125,'id_punkt_koniec' => 39,'punkty_do' => 5,'punkty_od' => 11,'id_pasma' => 4],

            ['id_punkt_poczatek' => 126,'id_punkt_koniec' => 40,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 4],
            ['id_punkt_poczatek' => 127,'id_punkt_koniec' => 40,'punkty_do' => 13,'punkty_od' => 4,'id_pasma' => 4],
            ['id_punkt_poczatek' => 128,'id_punkt_koniec' => 40,'punkty_do' => 12,'punkty_od' => 3,'id_pasma' => 4],

            ['id_punkt_poczatek' => 129,'id_punkt_koniec' => 41,'punkty_do' => 6,'punkty_od' => 2,'id_pasma' => 4],
            ['id_punkt_poczatek' => 130,'id_punkt_koniec' => 41,'punkty_do' => 1,'punkty_od' => 2,'id_pasma' => 4],
            ['id_punkt_poczatek' => 131,'id_punkt_koniec' => 41,'punkty_do' => 15,'punkty_od' => 6,'id_pasma' => 4],

            ['id_punkt_poczatek' => 132,'id_punkt_koniec' => 42,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 4],
            ['id_punkt_poczatek' => 133,'id_punkt_koniec' => 42,'punkty_do' => 1,'punkty_od' => 2,'id_pasma' => 4],
            ['id_punkt_poczatek' => 134,'id_punkt_koniec' => 42,'punkty_do' => 7,'punkty_od' => 2,'id_pasma' => 4],

            //Pasmo 5
            ['id_punkt_poczatek' => 135,'id_punkt_koniec' => 43,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 5],
            ['id_punkt_poczatek' => 136,'id_punkt_koniec' => 43,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 5],
            ['id_punkt_poczatek' => 137,'id_punkt_koniec' => 43,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 5],
            ['id_punkt_poczatek' => 138,'id_punkt_koniec' => 43,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 5],
            ['id_punkt_poczatek' => 139,'id_punkt_koniec' => 43,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 5],
            ['id_punkt_poczatek' => 140,'id_punkt_koniec' => 43,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 5],
            ['id_punkt_poczatek' => 141,'id_punkt_koniec' => 43,'punkty_do' => 12,'punkty_od' => 8,'id_pasma' => 5],
            ['id_punkt_poczatek' => 142,'id_punkt_koniec' => 43,'punkty_do' => 1,'punkty_od' => 2,'id_pasma' => 5],
            ['id_punkt_poczatek' => 143,'id_punkt_koniec' => 43,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 5],
            ['id_punkt_poczatek' => 144,'id_punkt_koniec' => 43,'punkty_do' => 5,'punkty_od' => 7,'id_pasma' => 5],
            ['id_punkt_poczatek' => 145,'id_punkt_koniec' => 43,'punkty_do' => 1,'punkty_od' => 2,'id_pasma' => 5],
            ['id_punkt_poczatek' => 146,'id_punkt_koniec' => 43,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 5],
            ['id_punkt_poczatek' => 147,'id_punkt_koniec' => 43,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 5],
            ['id_punkt_poczatek' => 148,'id_punkt_koniec' => 43,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 5],
            ['id_punkt_poczatek' => 149,'id_punkt_koniec' => 43,'punkty_do' => 8,'punkty_od' => 10,'id_pasma' => 5],
            ['id_punkt_poczatek' => 150,'id_punkt_koniec' => 43,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 5],

            ['id_punkt_poczatek' => 151,'id_punkt_koniec' => 44,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 5],
            ['id_punkt_poczatek' => 152,'id_punkt_koniec' => 44,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 5],
            ['id_punkt_poczatek' => 153,'id_punkt_koniec' => 44,'punkty_do' => 13,'punkty_od' => 5,'id_pasma' => 5],
            ['id_punkt_poczatek' => 154,'id_punkt_koniec' => 44,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 5],
            ['id_punkt_poczatek' => 155,'id_punkt_koniec' => 44,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 5],
            ['id_punkt_poczatek' => 156,'id_punkt_koniec' => 44,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 5],
            ['id_punkt_poczatek' => 157,'id_punkt_koniec' => 44,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 5],
            ['id_punkt_poczatek' => 158,'id_punkt_koniec' => 44,'punkty_do' => 8,'punkty_od' => 3,'id_pasma' => 5],
            ['id_punkt_poczatek' => 159,'id_punkt_koniec' => 44,'punkty_do' => 6,'punkty_od' => 2,'id_pasma' => 5],
            ['id_punkt_poczatek' => 160,'id_punkt_koniec' => 44,'punkty_do' => 7,'punkty_od' => 3,'id_pasma' => 5],
            ['id_punkt_poczatek' => 161,'id_punkt_koniec' => 44,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 5],
            ['id_punkt_poczatek' => 162,'id_punkt_koniec' => 44,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 5],
            ['id_punkt_poczatek' => 163,'id_punkt_koniec' => 44,'punkty_do' => 13,'punkty_od' => 4,'id_pasma' => 5],
            ['id_punkt_poczatek' => 164,'id_punkt_koniec' => 44,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 5],
            ['id_punkt_poczatek' => 165,'id_punkt_koniec' => 44,'punkty_do' => 8,'punkty_od' => 4,'id_pasma' => 5],
            ['id_punkt_poczatek' => 166,'id_punkt_koniec' => 44,'punkty_do' => 10,'punkty_od' => 6,'id_pasma' => 5],
            ['id_punkt_poczatek' => 167,'id_punkt_koniec' => 44,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 5],
            ['id_punkt_poczatek' => 168,'id_punkt_koniec' => 44,'punkty_do' => 9,'punkty_od' => 3,'id_pasma' => 5],
            ['id_punkt_poczatek' => 169,'id_punkt_koniec' => 44,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 5],
            ['id_punkt_poczatek' => 170,'id_punkt_koniec' => 44,'punkty_do' => 8,'punkty_od' => 4,'id_pasma' => 5],
            ['id_punkt_poczatek' => 171,'id_punkt_koniec' => 44,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 5],
            ['id_punkt_poczatek' => 172,'id_punkt_koniec' => 44,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 5],
            ['id_punkt_poczatek' => 173,'id_punkt_koniec' => 44,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 5],
            ['id_punkt_poczatek' => 174,'id_punkt_koniec' => 44,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 5],
            ['id_punkt_poczatek' => 175,'id_punkt_koniec' => 44,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 5],
            ['id_punkt_poczatek' => 176,'id_punkt_koniec' => 44,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 5],
            ['id_punkt_poczatek' => 177,'id_punkt_koniec' => 44,'punkty_do' => 8,'punkty_od' => 4,'id_pasma' => 5],
            ['id_punkt_poczatek' => 178,'id_punkt_koniec' => 44,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 5],
            ['id_punkt_poczatek' => 179,'id_punkt_koniec' => 44,'punkty_do' => 1,'punkty_od' => 2,'id_pasma' => 5],
            ['id_punkt_poczatek' => 180,'id_punkt_koniec' => 44,'punkty_do' => 9,'punkty_od' => 2,'id_pasma' => 5],
           
            ['id_punkt_poczatek' => 181,'id_punkt_koniec' => 45,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 5],
            ['id_punkt_poczatek' => 182,'id_punkt_koniec' => 45,'punkty_do' => 20,'punkty_od' => 7,'id_pasma' => 5],
            ['id_punkt_poczatek' => 183,'id_punkt_koniec' => 45,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 5],
            ['id_punkt_poczatek' => 184,'id_punkt_koniec' => 45,'punkty_do' => 15,'punkty_od' => 5,'id_pasma' => 5],
            ['id_punkt_poczatek' => 185,'id_punkt_koniec' => 45,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 5],
            ['id_punkt_poczatek' => 186,'id_punkt_koniec' => 45,'punkty_do' => 13,'punkty_od' => 8,'id_pasma' => 5],
            ['id_punkt_poczatek' => 187,'id_punkt_koniec' => 45,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 5],
            ['id_punkt_poczatek' => 188,'id_punkt_koniec' => 45,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 5],
            ['id_punkt_poczatek' => 189,'id_punkt_koniec' => 45,'punkty_do' => 6,'punkty_od' => 2,'id_pasma' => 5],
            ['id_punkt_poczatek' => 190,'id_punkt_koniec' => 45,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 5],
            ['id_punkt_poczatek' => 191,'id_punkt_koniec' => 45,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 5],
            
            ['id_punkt_poczatek' => 192,'id_punkt_koniec' => 46,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 5],
            ['id_punkt_poczatek' => 193,'id_punkt_koniec' => 46,'punkty_do' => 9,'punkty_od' => 4,'id_pasma' => 5],
            ['id_punkt_poczatek' => 194,'id_punkt_koniec' => 46,'punkty_do' => 4,'punkty_od' => 9,'id_pasma' => 5],
            ['id_punkt_poczatek' => 195,'id_punkt_koniec' => 46,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 5],
            ['id_punkt_poczatek' => 196,'id_punkt_koniec' => 46,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 5],
            ['id_punkt_poczatek' => 197,'id_punkt_koniec' => 46,'punkty_do' => 4,'punkty_od' => 1,'id_pasma' => 5],
            ['id_punkt_poczatek' => 198,'id_punkt_koniec' => 46,'punkty_do' => 18,'punkty_od' => 8,'id_pasma' => 5],
            ['id_punkt_poczatek' => 199,'id_punkt_koniec' => 46,'punkty_do' => 3,'punkty_od' => 8,'id_pasma' => 5],
            ['id_punkt_poczatek' => 200,'id_punkt_koniec' => 46,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 5],
            ['id_punkt_poczatek' => 201,'id_punkt_koniec' => 46,'punkty_do' => 2,'punkty_od' => 5,'id_pasma' => 5],
            ['id_punkt_poczatek' => 202,'id_punkt_koniec' => 46,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 5],
            ['id_punkt_poczatek' => 203,'id_punkt_koniec' => 46,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 5],
            ['id_punkt_poczatek' => 204,'id_punkt_koniec' => 46,'punkty_do' => 7,'punkty_od' => 3,'id_pasma' => 5],
            ['id_punkt_poczatek' => 205,'id_punkt_koniec' => 46,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 5],
            
            ['id_punkt_poczatek' => 206,'id_punkt_koniec' => 47,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 5],
            ['id_punkt_poczatek' => 207,'id_punkt_koniec' => 47,'punkty_do' => 6,'punkty_od' => 9,'id_pasma' => 5],
            ['id_punkt_poczatek' => 208,'id_punkt_koniec' => 47,'punkty_do' => 3,'punkty_od' => 9,'id_pasma' => 5],
            ['id_punkt_poczatek' => 209,'id_punkt_koniec' => 47,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 5],

            //Pasmo 6
            ['id_punkt_poczatek' => 210,'id_punkt_koniec' => 48,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 6],
            ['id_punkt_poczatek' => 211,'id_punkt_koniec' => 48,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 6],
            ['id_punkt_poczatek' => 212,'id_punkt_koniec' => 48,'punkty_do' => 6,'punkty_od' => 14,'id_pasma' => 6],
            
            ['id_punkt_poczatek' => 213,'id_punkt_koniec' => 49,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 6],
            ['id_punkt_poczatek' => 214,'id_punkt_koniec' => 49,'punkty_do' => 3,'punkty_od' => 7,'id_pasma' => 6],
            ['id_punkt_poczatek' => 215,'id_punkt_koniec' => 49,'punkty_do' => 3,'punkty_od' => 7,'id_pasma' => 6],
            ['id_punkt_poczatek' => 216,'id_punkt_koniec' => 49,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 6],
            
            ['id_punkt_poczatek' => 217,'id_punkt_koniec' => 50,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 6],
            ['id_punkt_poczatek' => 218,'id_punkt_koniec' => 50,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 6],
            ['id_punkt_poczatek' => 219,'id_punkt_koniec' => 50,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 6],
            ['id_punkt_poczatek' => 220,'id_punkt_koniec' => 50,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 6],
            ['id_punkt_poczatek' => 221,'id_punkt_koniec' => 50,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 6],

            //Pasmo 7
            ['id_punkt_poczatek' => 222,'id_punkt_koniec' => 51,'punkty_do' => 4,'punkty_od' => 1,'id_pasma' => 7],
            ['id_punkt_poczatek' => 223,'id_punkt_koniec' => 51,'punkty_do' => 5,'punkty_od' => 2,'id_pasma' => 7],
            ['id_punkt_poczatek' => 224,'id_punkt_koniec' => 51,'punkty_do' => 7,'punkty_od' => 2,'id_pasma' => 7],
            ['id_punkt_poczatek' => 225,'id_punkt_koniec' => 51,'punkty_do' => 10,'punkty_od' => 4,'id_pasma' => 7],
            ['id_punkt_poczatek' => 226,'id_punkt_koniec' => 51,'punkty_do' => 7,'punkty_od' => 2,'id_pasma' => 7],
            ['id_punkt_poczatek' => 227,'id_punkt_koniec' => 51,'punkty_do' => 9,'punkty_od' => 2,'id_pasma' => 7],

            ['id_punkt_poczatek' => 228,'id_punkt_koniec' => 52,'punkty_do' => 12,'punkty_od' => 4,'id_pasma' => 7],
            ['id_punkt_poczatek' => 229,'id_punkt_koniec' => 52,'punkty_do' => 11,'punkty_od' => 3,'id_pasma' => 7],
            ['id_punkt_poczatek' => 230,'id_punkt_koniec' => 52,'punkty_do' => 14,'punkty_od' => 6,'id_pasma' => 7],
            ['id_punkt_poczatek' => 231,'id_punkt_koniec' => 52,'punkty_do' => 12,'punkty_od' => 4,'id_pasma' => 7],
            ['id_punkt_poczatek' => 232,'id_punkt_koniec' => 52,'punkty_do' => 13,'punkty_od' => 3,'id_pasma' => 7],
            ['id_punkt_poczatek' => 233,'id_punkt_koniec' => 52,'punkty_do' => 10,'punkty_od' => 3,'id_pasma' => 7],
            ['id_punkt_poczatek' => 234,'id_punkt_koniec' => 52,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 7],

            ['id_punkt_poczatek' => 235,'id_punkt_koniec' => 53,'punkty_do' => 17,'punkty_od' => 17,'id_pasma' => 7],
            ['id_punkt_poczatek' => 236,'id_punkt_koniec' => 53,'punkty_do' => 11,'punkty_od' => 4,'id_pasma' => 7],

            ['id_punkt_poczatek' => 237,'id_punkt_koniec' => 54,'punkty_do' => 9,'punkty_od' => 4,'id_pasma' => 7],
            ['id_punkt_poczatek' => 238,'id_punkt_koniec' => 54,'punkty_do' => 5,'punkty_od' => 2,'id_pasma' => 7],
            ['id_punkt_poczatek' => 239,'id_punkt_koniec' => 54,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 7],
            ['id_punkt_poczatek' => 240,'id_punkt_koniec' => 54,'punkty_do' => 2,'punkty_od' => 10,'id_pasma' => 7],
            ['id_punkt_poczatek' => 241,'id_punkt_koniec' => 54,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 7],
            ['id_punkt_poczatek' => 242,'id_punkt_koniec' => 54,'punkty_do' => 8,'punkty_od' => 3,'id_pasma' => 7],
            ['id_punkt_poczatek' => 243,'id_punkt_koniec' => 54,'punkty_do' => 5,'punkty_od' => 2,'id_pasma' => 7],
            ['id_punkt_poczatek' => 244,'id_punkt_koniec' => 54,'punkty_do' => 13,'punkty_od' => 3,'id_pasma' => 7],
            ['id_punkt_poczatek' => 245,'id_punkt_koniec' => 54,'punkty_do' => 2,'punkty_od' => 7,'id_pasma' => 7],

            ['id_punkt_poczatek' => 246,'id_punkt_koniec' => 55,'punkty_do' => 2,'punkty_od' => 5,'id_pasma' => 7],
            ['id_punkt_poczatek' => 247,'id_punkt_koniec' => 55,'punkty_do' => 18,'punkty_od' => 5,'id_pasma' => 7],
            ['id_punkt_poczatek' => 248,'id_punkt_koniec' => 55,'punkty_do' => 10,'punkty_od' => 4,'id_pasma' => 7],

            //Pasmo 8
            ['id_punkt_poczatek' => 249,'id_punkt_koniec' => 56,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 8],
            ['id_punkt_poczatek' => 250,'id_punkt_koniec' => 56,'punkty_do' => 1,'punkty_od' => 3,'id_pasma' => 8],
            ['id_punkt_poczatek' => 251,'id_punkt_koniec' => 56,'punkty_do' => 9,'punkty_od' => 43,'id_pasma' => 8],
            ['id_punkt_poczatek' => 252,'id_punkt_koniec' => 56,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 8],
            ['id_punkt_poczatek' => 253,'id_punkt_koniec' => 56,'punkty_do' => 11,'punkty_od' => 9,'id_pasma' => 8],

            ['id_punkt_poczatek' => 254,'id_punkt_koniec' => 57,'punkty_do' => 1,'punkty_od' => 3,'id_pasma' => 8],
            ['id_punkt_poczatek' => 255,'id_punkt_koniec' => 57,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 8],
            ['id_punkt_poczatek' => 256,'id_punkt_koniec' => 57,'punkty_do' => 12,'punkty_od' => 6,'id_pasma' => 8],
            ['id_punkt_poczatek' => 257,'id_punkt_koniec' => 57,'punkty_do' => 5,'punkty_od' => 11,'id_pasma' => 8],
            ['id_punkt_poczatek' => 258,'id_punkt_koniec' => 57,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 8],
            ['id_punkt_poczatek' => 259,'id_punkt_koniec' => 57,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 8],
            ['id_punkt_poczatek' => 260,'id_punkt_koniec' => 57,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 8],

            ['id_punkt_poczatek' => 261,'id_punkt_koniec' => 58,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 8],
            ['id_punkt_poczatek' => 262,'id_punkt_koniec' => 58,'punkty_do' => 30,'punkty_od' => 17,'id_pasma' => 8],

            ['id_punkt_poczatek' => 263,'id_punkt_koniec' => 59,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 8],
            ['id_punkt_poczatek' => 264,'id_punkt_koniec' => 59,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 8],

            ['id_punkt_poczatek' => 265,'id_punkt_koniec' => 60,'punkty_do' => 8,'punkty_od' => 4,'id_pasma' => 8],
            ['id_punkt_poczatek' => 266,'id_punkt_koniec' => 60,'punkty_do' => 3,'punkty_od' => 5,'id_pasma' => 8],

            ['id_punkt_poczatek' => 267,'id_punkt_koniec' => 61,'punkty_do' => 1,'punkty_od' => 2,'id_pasma' => 8],
            ['id_punkt_poczatek' => 268,'id_punkt_koniec' => 61,'punkty_do' => 1,'punkty_od' => 2,'id_pasma' => 8],
            ['id_punkt_poczatek' => 269,'id_punkt_koniec' => 61,'punkty_do' => 9,'punkty_od' => 4,'id_pasma' => 8],

            //Pasmo 9
            ['id_punkt_poczatek' => 270,'id_punkt_koniec' => 62,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 9],
            ['id_punkt_poczatek' => 271,'id_punkt_koniec' => 62,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 9],
            ['id_punkt_poczatek' => 272,'id_punkt_koniec' => 62,'punkty_do' => 3,'punkty_od' => 4,'id_pasma' => 9],
            ['id_punkt_poczatek' => 273,'id_punkt_koniec' => 62,'punkty_do' => 5,'punkty_od' => 5,'id_pasma' => 9],
            
            ['id_punkt_poczatek' => 274,'id_punkt_koniec' => 63,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 9],
            ['id_punkt_poczatek' => 275,'id_punkt_koniec' => 63,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 9],
            ['id_punkt_poczatek' => 276,'id_punkt_koniec' => 63,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 9],
            ['id_punkt_poczatek' => 277,'id_punkt_koniec' => 63,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 9],

            ['id_punkt_poczatek' => 278,'id_punkt_koniec' => 64,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 9],
            ['id_punkt_poczatek' => 279,'id_punkt_koniec' => 64,'punkty_do' => 9,'punkty_od' => 8,'id_pasma' => 9],
            ['id_punkt_poczatek' => 280,'id_punkt_koniec' => 64,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 9],
            ['id_punkt_poczatek' => 281,'id_punkt_koniec' => 64,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 9],
            ['id_punkt_poczatek' => 282,'id_punkt_koniec' => 64,'punkty_do' => 11,'punkty_od' => 8,'id_pasma' => 9],
            
            ['id_punkt_poczatek' => 283,'id_punkt_koniec' => 65,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 9],
            ['id_punkt_poczatek' => 284,'id_punkt_koniec' => 65,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 9],
            
            ['id_punkt_poczatek' => 285,'id_punkt_koniec' => 66,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 9],
            ['id_punkt_poczatek' => 286,'id_punkt_koniec' => 66,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 9],
            ['id_punkt_poczatek' => 287,'id_punkt_koniec' => 66,'punkty_do' => 9,'punkty_od' => 4,'id_pasma' => 9],
            ['id_punkt_poczatek' => 288,'id_punkt_koniec' => 66,'punkty_do' => 10,'punkty_od' => 5,'id_pasma' => 9],
            ['id_punkt_poczatek' => 289,'id_punkt_koniec' => 66,'punkty_do' => 9,'punkty_od' => 6,'id_pasma' => 9],
            ['id_punkt_poczatek' => 290,'id_punkt_koniec' => 66,'punkty_do' => 9,'punkty_od' => 4,'id_pasma' => 9],

            ['id_punkt_poczatek' => 291,'id_punkt_koniec' => 67,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 9],
            ['id_punkt_poczatek' => 292,'id_punkt_koniec' => 67,'punkty_do' => 11,'punkty_od' => 5,'id_pasma' => 9],
            ['id_punkt_poczatek' => 293,'id_punkt_koniec' => 67,'punkty_do' => 9,'punkty_od' => 3,'id_pasma' => 9],
            ['id_punkt_poczatek' => 294,'id_punkt_koniec' => 67,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 9],

            //Pasmo 10
            ['id_punkt_poczatek' => 295,'id_punkt_koniec' => 68,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 10],
            ['id_punkt_poczatek' => 296,'id_punkt_koniec' => 68,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 10],
            ['id_punkt_poczatek' => 297,'id_punkt_koniec' => 68,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 10],
            ['id_punkt_poczatek' => 298,'id_punkt_koniec' => 68,'punkty_do' => 10,'punkty_od' => 6,'id_pasma' => 10],

            ['id_punkt_poczatek' => 299,'id_punkt_koniec' => 69,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 10],
            ['id_punkt_poczatek' => 300,'id_punkt_koniec' => 69,'punkty_do' => 5,'punkty_od' => 8,'id_pasma' => 10],
            ['id_punkt_poczatek' => 301,'id_punkt_koniec' => 69,'punkty_do' => 2,'punkty_od' => 4,'id_pasma' => 10],

            ['id_punkt_poczatek' => 302,'id_punkt_koniec' => 70,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 10],
            ['id_punkt_poczatek' => 303,'id_punkt_koniec' => 70,'punkty_do' => 10,'punkty_od' => 6,'id_pasma' => 10],
            ['id_punkt_poczatek' => 304,'id_punkt_koniec' => 70,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 10],
            ['id_punkt_poczatek' => 305,'id_punkt_koniec' => 70,'punkty_do' => 7,'punkty_od' => 3,'id_pasma' => 10],
            ['id_punkt_poczatek' => 306,'id_punkt_koniec' => 70,'punkty_do' => 11,'punkty_od' => 9,'id_pasma' => 10],

            ['id_punkt_poczatek' => 307,'id_punkt_koniec' => 71,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 10],
            ['id_punkt_poczatek' => 308,'id_punkt_koniec' => 71,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 10],

            ['id_punkt_poczatek' => 309,'id_punkt_koniec' => 72,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 10],
            ['id_punkt_poczatek' => 310,'id_punkt_koniec' => 72,'punkty_do' => 9,'punkty_od' => 5,'id_pasma' => 10],
            ['id_punkt_poczatek' => 311,'id_punkt_koniec' => 72,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 10],

            ['id_punkt_poczatek' => 312,'id_punkt_koniec' => 73,'punkty_do' => 9,'punkty_od' => 7,'id_pasma' => 10],
            ['id_punkt_poczatek' => 313,'id_punkt_koniec' => 73,'punkty_do' => 10,'punkty_od' => 5,'id_pasma' => 10],
            ['id_punkt_poczatek' => 314,'id_punkt_koniec' => 73,'punkty_do' => 13,'punkty_od' => 11,'id_pasma' => 10],

            //Pasmo 11
            ['id_punkt_poczatek' => 315,'id_punkt_koniec' => 74,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 11],
            ['id_punkt_poczatek' => 316,'id_punkt_koniec' => 74,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 11],
            ['id_punkt_poczatek' => 317,'id_punkt_koniec' => 74,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 11],

            ['id_punkt_poczatek' => 318,'id_punkt_koniec' => 75,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 11],
            ['id_punkt_poczatek' => 319,'id_punkt_koniec' => 75,'punkty_do' => 9,'punkty_od' => 4,'id_pasma' => 11],
            ['id_punkt_poczatek' => 320,'id_punkt_koniec' => 75,'punkty_do' => 8,'punkty_od' => 4,'id_pasma' => 11],
            ['id_punkt_poczatek' => 321,'id_punkt_koniec' => 75,'punkty_do' => 9,'punkty_od' => 6,'id_pasma' => 11],
            ['id_punkt_poczatek' => 322,'id_punkt_koniec' => 75,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 11],
            ['id_punkt_poczatek' => 323,'id_punkt_koniec' => 75,'punkty_do' => 9,'punkty_od' => 5,'id_pasma' => 11],

            ['id_punkt_poczatek' => 324,'id_punkt_koniec' => 76,'punkty_do' => 12,'punkty_od' => 7,'id_pasma' => 11],
            ['id_punkt_poczatek' => 325,'id_punkt_koniec' => 76,'punkty_do' => 11,'punkty_od' => 6,'id_pasma' => 11],
            ['id_punkt_poczatek' => 326,'id_punkt_koniec' => 76,'punkty_do' => 8,'punkty_od' => 4,'id_pasma' => 11],
            ['id_punkt_poczatek' => 327,'id_punkt_koniec' => 76,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 11],

            ['id_punkt_poczatek' => 328,'id_punkt_koniec' => 77,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 11],
            ['id_punkt_poczatek' => 329,'id_punkt_koniec' => 77,'punkty_do' => 3,'punkty_od' => 5,'id_pasma' => 11],
            ['id_punkt_poczatek' => 330,'id_punkt_koniec' => 77,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 11],

            ['id_punkt_poczatek' => 331,'id_punkt_koniec' => 78,'punkty_do' => 9,'punkty_od' => 5,'id_pasma' => 11],
            ['id_punkt_poczatek' => 332,'id_punkt_koniec' => 78,'punkty_do' => 12,'punkty_od' => 7,'id_pasma' => 11],
            ['id_punkt_poczatek' => 333,'id_punkt_koniec' => 78,'punkty_do' => 11,'punkty_od' => 6,'id_pasma' => 11],
            ['id_punkt_poczatek' => 334,'id_punkt_koniec' => 78,'punkty_do' => 9,'punkty_od' => 5,'id_pasma' => 11],
            ['id_punkt_poczatek' => 335,'id_punkt_koniec' => 78,'punkty_do' => 9,'punkty_od' => 4,'id_pasma' => 11],
            ['id_punkt_poczatek' => 336,'id_punkt_koniec' => 78,'punkty_do' => 10,'punkty_od' => 5,'id_pasma' => 11],
            ['id_punkt_poczatek' => 337,'id_punkt_koniec' => 78,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 11],
            ['id_punkt_poczatek' => 338,'id_punkt_koniec' => 78,'punkty_do' => 12,'punkty_od' => 7,'id_pasma' => 11],
            
            ['id_punkt_poczatek' => 339,'id_punkt_koniec' => 79,'punkty_do' => 9,'punkty_od' => 5,'id_pasma' => 11],
            ['id_punkt_poczatek' => 340,'id_punkt_koniec' => 79,'punkty_do' => 11,'punkty_od' => 8,'id_pasma' => 11],
            ['id_punkt_poczatek' => 341,'id_punkt_koniec' => 79,'punkty_do' => 10,'punkty_od' => 5,'id_pasma' => 11],
            ['id_punkt_poczatek' => 342,'id_punkt_koniec' => 79,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 11],

            //Pasmo 12
            ['id_punkt_poczatek' => 343,'id_punkt_koniec' => 80,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 12],
            ['id_punkt_poczatek' => 344,'id_punkt_koniec' => 80,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 12],
            ['id_punkt_poczatek' => 345,'id_punkt_koniec' => 80,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 12],

            ['id_punkt_poczatek' => 346,'id_punkt_koniec' => 81,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 12],
            ['id_punkt_poczatek' => 347,'id_punkt_koniec' => 81,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 12],
            ['id_punkt_poczatek' => 348,'id_punkt_koniec' => 81,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 12],
            ['id_punkt_poczatek' => 349,'id_punkt_koniec' => 81,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 12],

            ['id_punkt_poczatek' => 350,'id_punkt_koniec' => 82,'punkty_do' => 10,'punkty_od' => 7,'id_pasma' => 12],
            ['id_punkt_poczatek' => 351,'id_punkt_koniec' => 82,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 12],
            ['id_punkt_poczatek' => 352,'id_punkt_koniec' => 82,'punkty_do' => 11,'punkty_od' => 8,'id_pasma' => 12],
            ['id_punkt_poczatek' => 353,'id_punkt_koniec' => 82,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 12],
            ['id_punkt_poczatek' => 354,'id_punkt_koniec' => 82,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 12],
            ['id_punkt_poczatek' => 355,'id_punkt_koniec' => 82,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 12],
            ['id_punkt_poczatek' => 356,'id_punkt_koniec' => 82,'punkty_do' => 5,'punkty_od' => 2,'id_pasma' => 12],

            ['id_punkt_poczatek' => 357,'id_punkt_koniec' => 83,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 12],
            ['id_punkt_poczatek' => 358,'id_punkt_koniec' => 83,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 12],
            ['id_punkt_poczatek' => 359,'id_punkt_koniec' => 83,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 12],
            ['id_punkt_poczatek' => 360,'id_punkt_koniec' => 83,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 12],
            ['id_punkt_poczatek' => 361,'id_punkt_koniec' => 83,'punkty_do' => 8,'punkty_od' => 7,'id_pasma' => 12],
            
            ['id_punkt_poczatek' => 362,'id_punkt_koniec' => 84,'punkty_do' => 5,'punkty_od' => 9,'id_pasma' => 12],
            ['id_punkt_poczatek' => 363,'id_punkt_koniec' => 84,'punkty_do' => 3,'punkty_od' => 4,'id_pasma' => 12],
            
            ['id_punkt_poczatek' => 364,'id_punkt_koniec' => 85,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 12],
            ['id_punkt_poczatek' => 365,'id_punkt_koniec' => 85,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 12],
            
            //Pasmo 13
            ['id_punkt_poczatek' => 366,'id_punkt_koniec' => 86,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 13],
            ['id_punkt_poczatek' => 367,'id_punkt_koniec' => 86,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 13],
            ['id_punkt_poczatek' => 368,'id_punkt_koniec' => 86,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 13],
            
            ['id_punkt_poczatek' => 369,'id_punkt_koniec' => 87,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 13],
            ['id_punkt_poczatek' => 370,'id_punkt_koniec' => 87,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 13],
            ['id_punkt_poczatek' => 371,'id_punkt_koniec' => 87,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 13],
            ['id_punkt_poczatek' => 372,'id_punkt_koniec' => 87,'punkty_do' => 5,'punkty_od' => 5,'id_pasma' => 13],
            ['id_punkt_poczatek' => 373,'id_punkt_koniec' => 87,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 13],
            
            ['id_punkt_poczatek' => 374,'id_punkt_koniec' => 88,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 13],
            ['id_punkt_poczatek' => 375,'id_punkt_koniec' => 88,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 13],
            ['id_punkt_poczatek' => 376,'id_punkt_koniec' => 88,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 13],
            
            ['id_punkt_poczatek' => 377,'id_punkt_koniec' => 89,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 13],
            ['id_punkt_poczatek' => 378,'id_punkt_koniec' => 89,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 13],
            
            ['id_punkt_poczatek' => 379,'id_punkt_koniec' => 90,'punkty_do' => 3,'punkty_od' => 6,'id_pasma' => 13],
            ['id_punkt_poczatek' => 380,'id_punkt_koniec' => 90,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 13],
            
            ['id_punkt_poczatek' => 381,'id_punkt_koniec' => 91,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 13],
            ['id_punkt_poczatek' => 382,'id_punkt_koniec' => 91,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 13],
            ['id_punkt_poczatek' => 383,'id_punkt_koniec' => 91,'punkty_do' => 10,'punkty_od' => 6,'id_pasma' => 13],
            ['id_punkt_poczatek' => 384,'id_punkt_koniec' => 91,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 13],
            
            //Pasmo 14
            ['id_punkt_poczatek' => 385,'id_punkt_koniec' => 92,'punkty_do' => 15,'punkty_od' => 11,'id_pasma' => 14],
            ['id_punkt_poczatek' => 386,'id_punkt_koniec' => 92,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 14],
            ['id_punkt_poczatek' => 387,'id_punkt_koniec' => 92,'punkty_do' => 9,'punkty_od' => 5,'id_pasma' => 14],
            ['id_punkt_poczatek' => 388,'id_punkt_koniec' => 92,'punkty_do' => 9,'punkty_od' => 5,'id_pasma' => 14],
            ['id_punkt_poczatek' => 389,'id_punkt_koniec' => 92,'punkty_do' => 10,'punkty_od' => 5,'id_pasma' => 14],
            ['id_punkt_poczatek' => 390,'id_punkt_koniec' => 92,'punkty_do' => 11,'punkty_od' => 6,'id_pasma' => 14],
            ['id_punkt_poczatek' => 391,'id_punkt_koniec' => 92,'punkty_do' => 8,'punkty_od' => 4,'id_pasma' => 14],
            
            ['id_punkt_poczatek' => 392,'id_punkt_koniec' => 93,'punkty_do' => 12,'punkty_od' => 7,'id_pasma' => 14],
            ['id_punkt_poczatek' => 393,'id_punkt_koniec' => 93,'punkty_do' => 12,'punkty_od' => 6,'id_pasma' => 14],
            ['id_punkt_poczatek' => 394,'id_punkt_koniec' => 93,'punkty_do' => 6,'punkty_od' => 2,'id_pasma' => 14],
            ['id_punkt_poczatek' => 395,'id_punkt_koniec' => 93,'punkty_do' => 10,'punkty_od' => 5,'id_pasma' => 14],
            ['id_punkt_poczatek' => 396,'id_punkt_koniec' => 93,'punkty_do' => 10,'punkty_od' => 5,'id_pasma' => 14],
            ['id_punkt_poczatek' => 397,'id_punkt_koniec' => 93,'punkty_do' => 11,'punkty_od' => 6,'id_pasma' => 14],
            ['id_punkt_poczatek' => 398,'id_punkt_koniec' => 93,'punkty_do' => 11,'punkty_od' => 6,'id_pasma' => 14],
            ['id_punkt_poczatek' => 399,'id_punkt_koniec' => 93,'punkty_do' => 8,'punkty_od' => 7,'id_pasma' => 14],
            
            ['id_punkt_poczatek' => 400,'id_punkt_koniec' => 94,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 14],
            ['id_punkt_poczatek' => 401,'id_punkt_koniec' => 94,'punkty_do' => 7,'punkty_od' => 10,'id_pasma' => 14],
            
            ['id_punkt_poczatek' => 402,'id_punkt_koniec' => 95,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 14],
            ['id_punkt_poczatek' => 403,'id_punkt_koniec' => 95,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 14],
            
            ['id_punkt_poczatek' => 404,'id_punkt_koniec' => 96,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 14],
            ['id_punkt_poczatek' => 405,'id_punkt_koniec' => 96,'punkty_do' => 11,'punkty_od' => 5,'id_pasma' => 14],
            ['id_punkt_poczatek' => 406,'id_punkt_koniec' => 96,'punkty_do' => 11,'punkty_od' => 5,'id_pasma' => 14],
            ['id_punkt_poczatek' => 407,'id_punkt_koniec' => 96,'punkty_do' => 12,'punkty_od' => 6,'id_pasma' => 14],
            
            ['id_punkt_poczatek' => 408,'id_punkt_koniec' => 97,'punkty_do' => 3,'punkty_od' => 6,'id_pasma' => 14],
            ['id_punkt_poczatek' => 409,'id_punkt_koniec' => 97,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 14],

            //Pasmo 15
            ['id_punkt_poczatek' => 410,'id_punkt_koniec' => 98,'punkty_do' => 6,'punkty_od' => 7,'id_pasma' => 15],
            ['id_punkt_poczatek' => 411,'id_punkt_koniec' => 98,'punkty_do' => 11,'punkty_od' => 10,'id_pasma' => 15],
            ['id_punkt_poczatek' => 412,'id_punkt_koniec' => 98,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 15],
            ['id_punkt_poczatek' => 413,'id_punkt_koniec' => 98,'punkty_do' => 17,'punkty_od' => 21,'id_pasma' => 15],
            ['id_punkt_poczatek' => 414,'id_punkt_koniec' => 98,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 15],

            ['id_punkt_poczatek' => 415,'id_punkt_koniec' => 99,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 15],
            ['id_punkt_poczatek' => 416,'id_punkt_koniec' => 99,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 15],
            ['id_punkt_poczatek' => 417,'id_punkt_koniec' => 99,'punkty_do' => 10,'punkty_od' => 10,'id_pasma' => 15],

            ['id_punkt_poczatek' => 418,'id_punkt_koniec' => 100,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 15],
            ['id_punkt_poczatek' => 419,'id_punkt_koniec' => 100,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 15],
            ['id_punkt_poczatek' => 420,'id_punkt_koniec' => 100,'punkty_do' => 8,'punkty_od' => 14,'id_pasma' => 15],
            ['id_punkt_poczatek' => 421,'id_punkt_koniec' => 100,'punkty_do' => 9,'punkty_od' => 12,'id_pasma' => 15],
            ['id_punkt_poczatek' => 422,'id_punkt_koniec' => 100,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 15],

            ['id_punkt_poczatek' => 423,'id_punkt_koniec' => 101,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 15],
            ['id_punkt_poczatek' => 424,'id_punkt_koniec' => 101,'punkty_do' => 9,'punkty_od' => 6,'id_pasma' => 15],
            ['id_punkt_poczatek' => 425,'id_punkt_koniec' => 101,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 15],
            ['id_punkt_poczatek' => 426,'id_punkt_koniec' => 101,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 15],

            ['id_punkt_poczatek' => 427,'id_punkt_koniec' => 102,'punkty_do' => 5,'punkty_od' => 5,'id_pasma' => 15],
            ['id_punkt_poczatek' => 428,'id_punkt_koniec' => 102,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 15],
            ['id_punkt_poczatek' => 429,'id_punkt_koniec' => 102,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 15],
            ['id_punkt_poczatek' => 430,'id_punkt_koniec' => 102,'punkty_do' => 10,'punkty_od' => 8,'id_pasma' => 15],
            ['id_punkt_poczatek' => 431,'id_punkt_koniec' => 102,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 15],
            ['id_punkt_poczatek' => 432,'id_punkt_koniec' => 102,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 15],

            ['id_punkt_poczatek' => 433,'id_punkt_koniec' => 103,'punkty_do' => 8,'punkty_od' => 8,'id_pasma' => 15],
            ['id_punkt_poczatek' => 434,'id_punkt_koniec' => 103,'punkty_do' => 9,'punkty_od' => 8,'id_pasma' => 15],
            ['id_punkt_poczatek' => 435,'id_punkt_koniec' => 103,'punkty_do' => 10,'punkty_od' => 8,'id_pasma' => 15],
            ['id_punkt_poczatek' => 436,'id_punkt_koniec' => 103,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 15],
            ['id_punkt_poczatek' => 437,'id_punkt_koniec' => 103,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 15],

            //Pasmo 16
            ['id_punkt_poczatek' => 438,'id_punkt_koniec' => 104,'punkty_do' => 9,'punkty_od' => 8,'id_pasma' => 16],
            ['id_punkt_poczatek' => 439,'id_punkt_koniec' => 104,'punkty_do' => 10,'punkty_od' => 9,'id_pasma' => 16],
            ['id_punkt_poczatek' => 440,'id_punkt_koniec' => 104,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 16],
            ['id_punkt_poczatek' => 441,'id_punkt_koniec' => 104,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 16],

            ['id_punkt_poczatek' => 442,'id_punkt_koniec' => 105,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 16],
            ['id_punkt_poczatek' => 443,'id_punkt_koniec' => 105,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 16],
            ['id_punkt_poczatek' => 444,'id_punkt_koniec' => 105,'punkty_do' => 7,'punkty_od' => 7,'id_pasma' => 16],
            ['id_punkt_poczatek' => 445,'id_punkt_koniec' => 105,'punkty_do' => 5,'punkty_od' => 6,'id_pasma' => 16],
            ['id_punkt_poczatek' => 446,'id_punkt_koniec' => 105,'punkty_do' => 12,'punkty_od' => 10,'id_pasma' => 16],
            ['id_punkt_poczatek' => 447,'id_punkt_koniec' => 105,'punkty_do' => 8,'punkty_od' => 7,'id_pasma' => 16],

            ['id_punkt_poczatek' => 448,'id_punkt_koniec' => 106,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 16],
            ['id_punkt_poczatek' => 449,'id_punkt_koniec' => 106,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 16],

            ['id_punkt_poczatek' => 450,'id_punkt_koniec' => 107,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 16],
            ['id_punkt_poczatek' => 451,'id_punkt_koniec' => 107,'punkty_do' => 5,'punkty_od' => 6,'id_pasma' => 16],

            ['id_punkt_poczatek' => 452,'id_punkt_koniec' => 108,'punkty_do' => 5,'punkty_od' => 5,'id_pasma' => 16],
            ['id_punkt_poczatek' => 453,'id_punkt_koniec' => 108,'punkty_do' => 7,'punkty_od' => 7,'id_pasma' => 16],
            ['id_punkt_poczatek' => 454,'id_punkt_koniec' => 108,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 16],
            ['id_punkt_poczatek' => 455,'id_punkt_koniec' => 108,'punkty_do' => 11,'punkty_od' => 13,'id_pasma' => 16],
            ['id_punkt_poczatek' => 456,'id_punkt_koniec' => 108,'punkty_do' => 8,'punkty_od' => 8,'id_pasma' => 16],
            ['id_punkt_poczatek' => 457,'id_punkt_koniec' => 108,'punkty_do' => 6,'punkty_od' => 7,'id_pasma' => 16],

            ['id_punkt_poczatek' => 458,'id_punkt_koniec' => 109,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 16],
            ['id_punkt_poczatek' => 459,'id_punkt_koniec' => 109,'punkty_do' => 5,'punkty_od' => 6,'id_pasma' => 16],

            //Pasmo 17
            ['id_punkt_poczatek' => 460,'id_punkt_koniec' => 110,'punkty_do' => 9,'punkty_od' => 4,'id_pasma' => 17],
            ['id_punkt_poczatek' => 461,'id_punkt_koniec' => 110,'punkty_do' => 12,'punkty_od' => 6,'id_pasma' => 17],
            ['id_punkt_poczatek' => 462,'id_punkt_koniec' => 110,'punkty_do' => 13,'punkty_od' => 7,'id_pasma' => 17],
            ['id_punkt_poczatek' => 463,'id_punkt_koniec' => 110,'punkty_do' => 14,'punkty_od' => 8,'id_pasma' => 17],

            ['id_punkt_poczatek' => 464,'id_punkt_koniec' => 111,'punkty_do' => 11,'punkty_od' => 6,'id_pasma' => 17],
            ['id_punkt_poczatek' => 465,'id_punkt_koniec' => 111,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 17],
            ['id_punkt_poczatek' => 466,'id_punkt_koniec' => 111,'punkty_do' => 15,'punkty_od' => 9,'id_pasma' => 17],
            ['id_punkt_poczatek' => 467,'id_punkt_koniec' => 111,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 17],

            ['id_punkt_poczatek' => 468,'id_punkt_koniec' => 112,'punkty_do' => 1,'punkty_od' => 2,'id_pasma' => 17],
            ['id_punkt_poczatek' => 469,'id_punkt_koniec' => 112,'punkty_do' => 5,'punkty_od' => 2,'id_pasma' => 17],

            ['id_punkt_poczatek' => 470,'id_punkt_koniec' => 113,'punkty_do' => 5,'punkty_od' => 2,'id_pasma' => 17],
            ['id_punkt_poczatek' => 471,'id_punkt_koniec' => 113,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 17],
            ['id_punkt_poczatek' => 472,'id_punkt_koniec' => 113,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 17],

            ['id_punkt_poczatek' => 473,'id_punkt_koniec' => 114,'punkty_do' => 9,'punkty_od' => 7,'id_pasma' => 17],
            ['id_punkt_poczatek' => 474,'id_punkt_koniec' => 114,'punkty_do' => 18,'punkty_od' => 10,'id_pasma' => 17],
            ['id_punkt_poczatek' => 475,'id_punkt_koniec' => 114,'punkty_do' => 18,'punkty_od' => 10,'id_pasma' => 17],
            ['id_punkt_poczatek' => 476,'id_punkt_koniec' => 114,'punkty_do' => 17,'punkty_od' => 9,'id_pasma' => 17],
            ['id_punkt_poczatek' => 477,'id_punkt_koniec' => 114,'punkty_do' => 14,'punkty_od' => 7,'id_pasma' => 17],
            ['id_punkt_poczatek' => 478,'id_punkt_koniec' => 114,'punkty_do' => 14,'punkty_od' => 7,'id_pasma' => 17],
            ['id_punkt_poczatek' => 479,'id_punkt_koniec' => 114,'punkty_do' => 21,'punkty_od' => 12,'id_pasma' => 17],
            ['id_punkt_poczatek' => 480,'id_punkt_koniec' => 114,'punkty_do' => 19,'punkty_od' => 11,'id_pasma' => 17],
            ['id_punkt_poczatek' => 481,'id_punkt_koniec' => 114,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 17],
            ['id_punkt_poczatek' => 482,'id_punkt_koniec' => 114,'punkty_do' => 15,'punkty_od' => 8,'id_pasma' => 17],
            ['id_punkt_poczatek' => 483,'id_punkt_koniec' => 114,'punkty_do' => 15,'punkty_od' => 8,'id_pasma' => 17],
            ['id_punkt_poczatek' => 484,'id_punkt_koniec' => 114,'punkty_do' => 16,'punkty_od' => 9,'id_pasma' => 17],
            ['id_punkt_poczatek' => 485,'id_punkt_koniec' => 114,'punkty_do' => 4,'punkty_od' => 5,'id_pasma' => 17],
            ['id_punkt_poczatek' => 486,'id_punkt_koniec' => 114,'punkty_do' => 13,'punkty_od' => 6,'id_pasma' => 17],

            ['id_punkt_poczatek' => 487,'id_punkt_koniec' => 115,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 17],
            ['id_punkt_poczatek' => 488,'id_punkt_koniec' => 115,'punkty_do' => 1,'punkty_od' => 2,'id_pasma' => 17],
            ['id_punkt_poczatek' => 489,'id_punkt_koniec' => 115,'punkty_do' => 5,'punkty_od' => 8,'id_pasma' => 17],

            //Pasmo 18
            ['id_punkt_poczatek' => 490,'id_punkt_koniec' => 116,'punkty_do' => 12,'punkty_od' => 10,'id_pasma' => 18],
            ['id_punkt_poczatek' => 491,'id_punkt_koniec' => 116,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 18],
            ['id_punkt_poczatek' => 492,'id_punkt_koniec' => 116,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 18],
            ['id_punkt_poczatek' => 493,'id_punkt_koniec' => 116,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 18],
            ['id_punkt_poczatek' => 494,'id_punkt_koniec' => 116,'punkty_do' => 10,'punkty_od' => 8,'id_pasma' => 18],
            ['id_punkt_poczatek' => 495,'id_punkt_koniec' => 116,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 18],
            ['id_punkt_poczatek' => 496,'id_punkt_koniec' => 116,'punkty_do' => 11,'punkty_od' => 9,'id_pasma' => 18],

            ['id_punkt_poczatek' => 497,'id_punkt_koniec' => 117,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 18],
            ['id_punkt_poczatek' => 498,'id_punkt_koniec' => 117,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 18],
            ['id_punkt_poczatek' => 499,'id_punkt_koniec' => 117,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 18],
            ['id_punkt_poczatek' => 500,'id_punkt_koniec' => 117,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 18],

            ['id_punkt_poczatek' => 501,'id_punkt_koniec' => 118,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 18],
            ['id_punkt_poczatek' => 502,'id_punkt_koniec' => 118,'punkty_do' => 14,'punkty_od' => 12,'id_pasma' => 18],

            ['id_punkt_poczatek' => 503,'id_punkt_koniec' => 119,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 18],
            ['id_punkt_poczatek' => 504,'id_punkt_koniec' => 119,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 18],
            ['id_punkt_poczatek' => 505,'id_punkt_koniec' => 119,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 18],
            ['id_punkt_poczatek' => 506,'id_punkt_koniec' => 119,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 18],
            ['id_punkt_poczatek' => 507,'id_punkt_koniec' => 119,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 18],
            ['id_punkt_poczatek' => 508,'id_punkt_koniec' => 119,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 18],
            ['id_punkt_poczatek' => 509,'id_punkt_koniec' => 119,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 18],

            //Pasmo 19
            ['id_punkt_poczatek' => 510,'id_punkt_koniec' => 120,'punkty_do' => 15,'punkty_od' => 16,'id_pasma' => 19],
            ['id_punkt_poczatek' => 511,'id_punkt_koniec' => 120,'punkty_do' => 12,'punkty_od' => 11,'id_pasma' => 19],

            ['id_punkt_poczatek' => 512,'id_punkt_koniec' => 121,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 19],
            ['id_punkt_poczatek' => 513,'id_punkt_koniec' => 121,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 19],
            ['id_punkt_poczatek' => 514,'id_punkt_koniec' => 121,'punkty_do' => 5,'punkty_od' => 5,'id_pasma' => 19],

            ['id_punkt_poczatek' => 515,'id_punkt_koniec' => 122,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 19],
            ['id_punkt_poczatek' => 516,'id_punkt_koniec' => 122,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 19],
            ['id_punkt_poczatek' => 517,'id_punkt_koniec' => 122,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 19],
            ['id_punkt_poczatek' => 518,'id_punkt_koniec' => 122,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 19],
            ['id_punkt_poczatek' => 519,'id_punkt_koniec' => 122,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 19],
            ['id_punkt_poczatek' => 520,'id_punkt_koniec' => 122,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 19],
            ['id_punkt_poczatek' => 521,'id_punkt_koniec' => 122,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 19],

            ['id_punkt_poczatek' => 522,'id_punkt_koniec' => 123,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 19],
            ['id_punkt_poczatek' => 523,'id_punkt_koniec' => 123,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 19],
            ['id_punkt_poczatek' => 524,'id_punkt_koniec' => 123,'punkty_do' => 15,'punkty_od' => 12,'id_pasma' => 19],

            ['id_punkt_poczatek' => 525,'id_punkt_koniec' => 124,'punkty_do' => 12,'punkty_od' => 11,'id_pasma' => 19],
            ['id_punkt_poczatek' => 526,'id_punkt_koniec' => 124,'punkty_do' => 10,'punkty_od' => 9,'id_pasma' => 19],

            ['id_punkt_poczatek' => 527,'id_punkt_koniec' => 125,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 19],
            ['id_punkt_poczatek' => 528,'id_punkt_koniec' => 125,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 19],

            //Pasmo 20
            ['id_punkt_poczatek' => 529,'id_punkt_koniec' => 126,'punkty_do' => 17,'punkty_od' => 13,'id_pasma' => 20],
            ['id_punkt_poczatek' => 530,'id_punkt_koniec' => 126,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 20],
            ['id_punkt_poczatek' => 531,'id_punkt_koniec' => 126,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 20],
            ['id_punkt_poczatek' => 532,'id_punkt_koniec' => 126,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 20],

            ['id_punkt_poczatek' => 533,'id_punkt_koniec' => 127,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 20],
            ['id_punkt_poczatek' => 534,'id_punkt_koniec' => 127,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 20],
            ['id_punkt_poczatek' => 535,'id_punkt_koniec' => 127,'punkty_do' => 4,'punkty_od' => 5,'id_pasma' => 20],
            ['id_punkt_poczatek' => 536,'id_punkt_koniec' => 127,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 20],
            ['id_punkt_poczatek' => 537,'id_punkt_koniec' => 127,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 20],

            ['id_punkt_poczatek' => 538,'id_punkt_koniec' => 128,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 20],
            ['id_punkt_poczatek' => 539,'id_punkt_koniec' => 128,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 20],
            ['id_punkt_poczatek' => 540,'id_punkt_koniec' => 128,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 20],
            ['id_punkt_poczatek' => 541,'id_punkt_koniec' => 128,'punkty_do' => 12,'punkty_od' => 11,'id_pasma' => 20],
            ['id_punkt_poczatek' => 542,'id_punkt_koniec' => 128,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 20],

            ['id_punkt_poczatek' => 543,'id_punkt_koniec' => 129,'punkty_do' => 17,'punkty_od' => 12,'id_pasma' => 20],
            ['id_punkt_poczatek' => 544,'id_punkt_koniec' => 129,'punkty_do' => 5,'punkty_od' => 2,'id_pasma' => 20],

            ['id_punkt_poczatek' => 545,'id_punkt_koniec' => 130,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 20],
            ['id_punkt_poczatek' => 546,'id_punkt_koniec' => 130,'punkty_do' => 9,'punkty_od' => 6,'id_pasma' => 20],
            ['id_punkt_poczatek' => 547,'id_punkt_koniec' => 130,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 20],

            ['id_punkt_poczatek' => 548,'id_punkt_koniec' => 131,'punkty_do' => 10,'punkty_od' => 8,'id_pasma' => 20],
            ['id_punkt_poczatek' => 549,'id_punkt_koniec' => 131,'punkty_do' => 10,'punkty_od' => 8,'id_pasma' => 20],
            ['id_punkt_poczatek' => 550,'id_punkt_koniec' => 131,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 20],
            ['id_punkt_poczatek' => 551,'id_punkt_koniec' => 131,'punkty_do' => 5,'punkty_od' => 5,'id_pasma' => 20],
            ['id_punkt_poczatek' => 552,'id_punkt_koniec' => 131,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 20],
            ['id_punkt_poczatek' => 553,'id_punkt_koniec' => 131,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 20],
            ['id_punkt_poczatek' => 554,'id_punkt_koniec' => 131,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 20],

            //Pasmo 21
            ['id_punkt_poczatek' => 555,'id_punkt_koniec' => 132,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 21],
            ['id_punkt_poczatek' => 556,'id_punkt_koniec' => 132,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 21],
            ['id_punkt_poczatek' => 557,'id_punkt_koniec' => 132,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 21],
            ['id_punkt_poczatek' => 558,'id_punkt_koniec' => 132,'punkty_do' => 9,'punkty_od' => 8,'id_pasma' => 21],

            ['id_punkt_poczatek' => 559,'id_punkt_koniec' => 133,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 21],
            ['id_punkt_poczatek' => 560,'id_punkt_koniec' => 133,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 21],
            ['id_punkt_poczatek' => 561,'id_punkt_koniec' => 133,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 21],

            ['id_punkt_poczatek' => 562,'id_punkt_koniec' => 134,'punkty_do' => 10,'punkty_od' => 10,'id_pasma' => 21],
            ['id_punkt_poczatek' => 563,'id_punkt_koniec' => 134,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 21],
            ['id_punkt_poczatek' => 564,'id_punkt_koniec' => 134,'punkty_do' => 9,'punkty_od' => 7,'id_pasma' => 21],
            ['id_punkt_poczatek' => 565,'id_punkt_koniec' => 134,'punkty_do' => 13,'punkty_od' => 11,'id_pasma' => 21],

            ['id_punkt_poczatek' => 566,'id_punkt_koniec' => 135,'punkty_do' => 8,'punkty_od' => 7,'id_pasma' => 21],
            ['id_punkt_poczatek' => 567,'id_punkt_koniec' => 135,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 21],
            ['id_punkt_poczatek' => 568,'id_punkt_koniec' => 135,'punkty_do' => 12,'punkty_od' => 10,'id_pasma' => 21],

            ['id_punkt_poczatek' => 569,'id_punkt_koniec' => 136,'punkty_do' => 7,'punkty_od' => 7,'id_pasma' => 21],
            ['id_punkt_poczatek' => 570,'id_punkt_koniec' => 136,'punkty_do' => 11,'punkty_od' => 10,'id_pasma' => 21],
            ['id_punkt_poczatek' => 571,'id_punkt_koniec' => 136,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 21],

            ['id_punkt_poczatek' => 572,'id_punkt_koniec' => 137,'punkty_do' => 17,'punkty_od' => 16,'id_pasma' => 21],
            ['id_punkt_poczatek' => 573,'id_punkt_koniec' => 137,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 21],
            ['id_punkt_poczatek' => 574,'id_punkt_koniec' => 137,'punkty_do' => 12,'punkty_od' => 9,'id_pasma' => 21],
            ['id_punkt_poczatek' => 575,'id_punkt_koniec' => 137,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 21],

            //Pasmo 22
            ['id_punkt_poczatek' => 576,'id_punkt_koniec' => 138,'punkty_do' => 13,'punkty_od' => 9,'id_pasma' => 22],
            ['id_punkt_poczatek' => 577,'id_punkt_koniec' => 138,'punkty_do' => 10,'punkty_od' => 6,'id_pasma' => 22],
            ['id_punkt_poczatek' => 578,'id_punkt_koniec' => 138,'punkty_do' => 9,'punkty_od' => 5,'id_pasma' => 22],
            ['id_punkt_poczatek' => 579,'id_punkt_koniec' => 138,'punkty_do' => 8,'punkty_od' => 4,'id_pasma' => 22],

            ['id_punkt_poczatek' => 580,'id_punkt_koniec' => 139,'punkty_do' => 9,'punkty_od' => 5,'id_pasma' => 22],
            ['id_punkt_poczatek' => 581,'id_punkt_koniec' => 139,'punkty_do' => 5,'punkty_od' => 2,'id_pasma' => 22],
            ['id_punkt_poczatek' => 582,'id_punkt_koniec' => 139,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 22],
            ['id_punkt_poczatek' => 583,'id_punkt_koniec' => 139,'punkty_do' => 9,'punkty_od' => 6,'id_pasma' => 22],

            ['id_punkt_poczatek' => 584,'id_punkt_koniec' => 140,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 22],
            ['id_punkt_poczatek' => 585,'id_punkt_koniec' => 140,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 22],
            ['id_punkt_poczatek' => 586,'id_punkt_koniec' => 140,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 22],
            ['id_punkt_poczatek' => 587,'id_punkt_koniec' => 140,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 22],

            ['id_punkt_poczatek' => 588,'id_punkt_koniec' => 141,'punkty_do' => 9,'punkty_od' => 5,'id_pasma' => 22],
            ['id_punkt_poczatek' => 589,'id_punkt_koniec' => 141,'punkty_do' => 11,'punkty_od' => 5,'id_pasma' => 22],
            ['id_punkt_poczatek' => 590,'id_punkt_koniec' => 141,'punkty_do' => 14,'punkty_od' => 8,'id_pasma' => 22],
            ['id_punkt_poczatek' => 591,'id_punkt_koniec' => 141,'punkty_do' => 8,'punkty_od' => 4,'id_pasma' => 22],
            ['id_punkt_poczatek' => 592,'id_punkt_koniec' => 141,'punkty_do' => 5,'punkty_od' => 2,'id_pasma' => 22],
            ['id_punkt_poczatek' => 593,'id_punkt_koniec' => 141,'punkty_do' => 7,'punkty_od' => 3,'id_pasma' => 22],

            ['id_punkt_poczatek' => 594,'id_punkt_koniec' => 142,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 22],
            ['id_punkt_poczatek' => 595,'id_punkt_koniec' => 142,'punkty_do' => 9,'punkty_od' => 6,'id_pasma' => 22],
            ['id_punkt_poczatek' => 596,'id_punkt_koniec' => 142,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 22],
            ['id_punkt_poczatek' => 597,'id_punkt_koniec' => 142,'punkty_do' => 3,'punkty_od' => 4,'id_pasma' => 22],

            ['id_punkt_poczatek' => 598,'id_punkt_koniec' => 143,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 22],
            ['id_punkt_poczatek' => 599,'id_punkt_koniec' => 143,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 22],
            ['id_punkt_poczatek' => 600,'id_punkt_koniec' => 143,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 22],
            ['id_punkt_poczatek' => 601,'id_punkt_koniec' => 143,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 22],

            //Pasmo 23
            ['id_punkt_poczatek' => 602,'id_punkt_koniec' => 144,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 23],
            ['id_punkt_poczatek' => 603,'id_punkt_koniec' => 144,'punkty_do' => 9,'punkty_od' => 6,'id_pasma' => 23],
            ['id_punkt_poczatek' => 604,'id_punkt_koniec' => 144,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 23],
            ['id_punkt_poczatek' => 605,'id_punkt_koniec' => 144,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 23],
            ['id_punkt_poczatek' => 606,'id_punkt_koniec' => 144,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 23],
            ['id_punkt_poczatek' => 607,'id_punkt_koniec' => 144,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 23],
            ['id_punkt_poczatek' => 608,'id_punkt_koniec' => 144,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 23],
            
            ['id_punkt_poczatek' => 609,'id_punkt_koniec' => 145,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 23],
            ['id_punkt_poczatek' => 610,'id_punkt_koniec' => 145,'punkty_do' => 5,'punkty_od' => 5,'id_pasma' => 23],
            ['id_punkt_poczatek' => 611,'id_punkt_koniec' => 145,'punkty_do' => 11,'punkty_od' => 11,'id_pasma' => 23],
            ['id_punkt_poczatek' => 612,'id_punkt_koniec' => 145,'punkty_do' => 6,'punkty_od' => 7,'id_pasma' => 23],

            ['id_punkt_poczatek' => 613,'id_punkt_koniec' => 146,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 23],
            ['id_punkt_poczatek' => 614,'id_punkt_koniec' => 146,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 23],
            ['id_punkt_poczatek' => 615,'id_punkt_koniec' => 146,'punkty_do' => 7,'punkty_od' => 3,'id_pasma' => 23],
            ['id_punkt_poczatek' => 616,'id_punkt_koniec' => 146,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 23],
            ['id_punkt_poczatek' => 617,'id_punkt_koniec' => 146,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 23],
            ['id_punkt_poczatek' => 618,'id_punkt_koniec' => 146,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 23],
            ['id_punkt_poczatek' => 619,'id_punkt_koniec' => 146,'punkty_do' => 8,'punkty_od' => 7,'id_pasma' => 23],
            ['id_punkt_poczatek' => 620,'id_punkt_koniec' => 146,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 23],

            ['id_punkt_poczatek' => 621,'id_punkt_koniec' => 147,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 23],
            ['id_punkt_poczatek' => 622,'id_punkt_koniec' => 147,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 23],
            ['id_punkt_poczatek' => 623,'id_punkt_koniec' => 147,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 23],
            ['id_punkt_poczatek' => 624,'id_punkt_koniec' => 147,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 23],

            ['id_punkt_poczatek' => 625,'id_punkt_koniec' => 148,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 23],
            ['id_punkt_poczatek' => 626,'id_punkt_koniec' => 148,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 23],
            ['id_punkt_poczatek' => 627,'id_punkt_koniec' => 148,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 23],
            ['id_punkt_poczatek' => 628,'id_punkt_koniec' => 148,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 23],
            ['id_punkt_poczatek' => 629,'id_punkt_koniec' => 148,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 23],
            ['id_punkt_poczatek' => 630,'id_punkt_koniec' => 148,'punkty_do' => 7,'punkty_od' => 7,'id_pasma' => 23],

            ['id_punkt_poczatek' => 631,'id_punkt_koniec' => 149,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 23],
            ['id_punkt_poczatek' => 632,'id_punkt_koniec' => 149,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 23],
            ['id_punkt_poczatek' => 633,'id_punkt_koniec' => 149,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 23],
            ['id_punkt_poczatek' => 634,'id_punkt_koniec' => 149,'punkty_do' => 5,'punkty_od' => 5,'id_pasma' => 23],

            //Pasmo 24
            ['id_punkt_poczatek' => 635,'id_punkt_koniec' => 150,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 24],
            ['id_punkt_poczatek' => 636,'id_punkt_koniec' => 150,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 24],
            ['id_punkt_poczatek' => 637,'id_punkt_koniec' => 150,'punkty_do' => 13,'punkty_od' => 10,'id_pasma' => 24],
            ['id_punkt_poczatek' => 638,'id_punkt_koniec' => 150,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 24],
            ['id_punkt_poczatek' => 639,'id_punkt_koniec' => 150,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 24],
            ['id_punkt_poczatek' => 640,'id_punkt_koniec' => 150,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 24],
            ['id_punkt_poczatek' => 641,'id_punkt_koniec' => 150,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 24],

            ['id_punkt_poczatek' => 642,'id_punkt_koniec' => 151,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 24],
            ['id_punkt_poczatek' => 643,'id_punkt_koniec' => 151,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 24],
            ['id_punkt_poczatek' => 644,'id_punkt_koniec' => 151,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 24],

            ['id_punkt_poczatek' => 645,'id_punkt_koniec' => 152,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 24],
            ['id_punkt_poczatek' => 646,'id_punkt_koniec' => 152,'punkty_do' => 5,'punkty_od' => 6,'id_pasma' => 24],
            ['id_punkt_poczatek' => 647,'id_punkt_koniec' => 152,'punkty_do' => 7,'punkty_od' => 8,'id_pasma' => 24],
            ['id_punkt_poczatek' => 648,'id_punkt_koniec' => 152,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 24],
            ['id_punkt_poczatek' => 649,'id_punkt_koniec' => 152,'punkty_do' => 2,'punkty_od' => 4,'id_pasma' => 24],
            
            ['id_punkt_poczatek' => 650,'id_punkt_koniec' => 153,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 24],
            ['id_punkt_poczatek' => 651,'id_punkt_koniec' => 153,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 24],
            ['id_punkt_poczatek' => 652,'id_punkt_koniec' => 153,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 24],
            ['id_punkt_poczatek' => 653,'id_punkt_koniec' => 153,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 24],

            ['id_punkt_poczatek' => 654,'id_punkt_koniec' => 154,'punkty_do' => 3,'punkty_od' => 5,'id_pasma' => 24],
            ['id_punkt_poczatek' => 655,'id_punkt_koniec' => 154,'punkty_do' => 4,'punkty_od' => 6,'id_pasma' => 24],

            ['id_punkt_poczatek' => 656,'id_punkt_koniec' => 155,'punkty_do' => 15,'punkty_od' => 12,'id_pasma' => 24],
            ['id_punkt_poczatek' => 657,'id_punkt_koniec' => 155,'punkty_do' => 14,'punkty_od' => 8,'id_pasma' => 24],
            ['id_punkt_poczatek' => 658,'id_punkt_koniec' => 155,'punkty_do' => 14,'punkty_od' => 11,'id_pasma' => 24],
            ['id_punkt_poczatek' => 659,'id_punkt_koniec' => 155,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 24],
            ['id_punkt_poczatek' => 660,'id_punkt_koniec' => 155,'punkty_do' => 9,'punkty_od' => 6,'id_pasma' => 24],

            //Pasmo 25
            ['id_punkt_poczatek' => 661,'id_punkt_koniec' => 156,'punkty_do' => 12,'punkty_od' => 12,'id_pasma' => 25],
            ['id_punkt_poczatek' => 662,'id_punkt_koniec' => 156,'punkty_do' => 5,'punkty_od' => 5,'id_pasma' => 25],

            ['id_punkt_poczatek' => 663,'id_punkt_koniec' => 157,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 25],
            ['id_punkt_poczatek' => 664,'id_punkt_koniec' => 157,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 25],
            ['id_punkt_poczatek' => 665,'id_punkt_koniec' => 157,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 25],

            ['id_punkt_poczatek' => 666,'id_punkt_koniec' => 158,'punkty_do' => 11,'punkty_od' => 10,'id_pasma' => 25],
            ['id_punkt_poczatek' => 667,'id_punkt_koniec' => 158,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 25],
            ['id_punkt_poczatek' => 668,'id_punkt_koniec' => 158,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 25],

            ['id_punkt_poczatek' => 669,'id_punkt_koniec' => 159,'punkty_do' => 9,'punkty_od' => 7,'id_pasma' => 25],
            ['id_punkt_poczatek' => 670,'id_punkt_koniec' => 159,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 25],
            ['id_punkt_poczatek' => 671,'id_punkt_koniec' => 159,'punkty_do' => 27,'punkty_od' => 24,'id_pasma' => 25],
            ['id_punkt_poczatek' => 672,'id_punkt_koniec' => 159,'punkty_do' => 23,'punkty_od' => 21,'id_pasma' => 25],
            ['id_punkt_poczatek' => 673,'id_punkt_koniec' => 159,'punkty_do' => 11,'punkty_od' => 9,'id_pasma' => 25],
            ['id_punkt_poczatek' => 674,'id_punkt_koniec' => 159,'punkty_do' => 14,'punkty_od' => 12,'id_pasma' => 25],
            ['id_punkt_poczatek' => 675,'id_punkt_koniec' => 159,'punkty_do' => 14,'punkty_od' => 11,'id_pasma' => 25],
            ['id_punkt_poczatek' => 676,'id_punkt_koniec' => 159,'punkty_do' => 13,'punkty_od' => 11,'id_pasma' => 25],
            ['id_punkt_poczatek' => 677,'id_punkt_koniec' => 159,'punkty_do' => 9,'punkty_od' => 9,'id_pasma' => 25],

            ['id_punkt_poczatek' => 678,'id_punkt_koniec' => 160,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 25],
            ['id_punkt_poczatek' => 679,'id_punkt_koniec' => 160,'punkty_do' => 9,'punkty_od' => 7,'id_pasma' => 25],
            ['id_punkt_poczatek' => 680,'id_punkt_koniec' => 160,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 25],
            ['id_punkt_poczatek' => 681,'id_punkt_koniec' => 160,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 25],

            ['id_punkt_poczatek' => 682,'id_punkt_koniec' => 161,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 25],
            ['id_punkt_poczatek' => 683,'id_punkt_koniec' => 161,'punkty_do' => 9,'punkty_od' => 7,'id_pasma' => 25],
            ['id_punkt_poczatek' => 684,'id_punkt_koniec' => 161,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 25],

            //Pasmo 26
            ['id_punkt_poczatek' => 685,'id_punkt_koniec' => 162,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 26],
            ['id_punkt_poczatek' => 686,'id_punkt_koniec' => 162,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 26],
            ['id_punkt_poczatek' => 687,'id_punkt_koniec' => 162,'punkty_do' => 8,'punkty_od' => 8,'id_pasma' => 26],

            ['id_punkt_poczatek' => 688,'id_punkt_koniec' => 163,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 26],
            ['id_punkt_poczatek' => 689,'id_punkt_koniec' => 163,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 26],
            ['id_punkt_poczatek' => 690,'id_punkt_koniec' => 163,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 26],
            ['id_punkt_poczatek' => 691,'id_punkt_koniec' => 163,'punkty_do' => 10,'punkty_od' => 9,'id_pasma' => 26],
            ['id_punkt_poczatek' => 692,'id_punkt_koniec' => 163,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 26],

            ['id_punkt_poczatek' => 693,'id_punkt_koniec' => 164,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 26],
            ['id_punkt_poczatek' => 694,'id_punkt_koniec' => 164,'punkty_do' => 11,'punkty_od' => 10,'id_pasma' => 26],
            ['id_punkt_poczatek' => 695,'id_punkt_koniec' => 164,'punkty_do' => 10,'punkty_od' => 9,'id_pasma' => 26],

            ['id_punkt_poczatek' => 696,'id_punkt_koniec' => 165,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 26],
            ['id_punkt_poczatek' => 697,'id_punkt_koniec' => 165,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 26],
            ['id_punkt_poczatek' => 698,'id_punkt_koniec' => 165,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 26],

            ['id_punkt_poczatek' => 699,'id_punkt_koniec' => 166,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 26],
            ['id_punkt_poczatek' => 700,'id_punkt_koniec' => 166,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 26],
            ['id_punkt_poczatek' => 701,'id_punkt_koniec' => 166,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 26],
            ['id_punkt_poczatek' => 702,'id_punkt_koniec' => 166,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 26],
            ['id_punkt_poczatek' => 703,'id_punkt_koniec' => 166,'punkty_do' => 7,'punkty_od' => 7,'id_pasma' => 26],

            ['id_punkt_poczatek' => 704,'id_punkt_koniec' => 167,'punkty_do' => 10,'punkty_od' => 8,'id_pasma' => 26],
            ['id_punkt_poczatek' => 705,'id_punkt_koniec' => 167,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 26],
            ['id_punkt_poczatek' => 706,'id_punkt_koniec' => 167,'punkty_do' => 9,'punkty_od' => 7,'id_pasma' => 26],
            ['id_punkt_poczatek' => 707,'id_punkt_koniec' => 167,'punkty_do' => 11,'punkty_od' => 11,'id_pasma' => 26],
            ['id_punkt_poczatek' => 708,'id_punkt_koniec' => 167,'punkty_do' => 9,'punkty_od' => 9,'id_pasma' => 26],

            //Pasmo 27
            ['id_punkt_poczatek' => 709,'id_punkt_koniec' => 168,'punkty_do' => 8,'punkty_od' => 8,'id_pasma' => 27],
            ['id_punkt_poczatek' => 710,'id_punkt_koniec' => 168,'punkty_do' => 9,'punkty_od' => 8,'id_pasma' => 27],
            ['id_punkt_poczatek' => 711,'id_punkt_koniec' => 168,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 27],
            ['id_punkt_poczatek' => 712,'id_punkt_koniec' => 168,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 27],

            ['id_punkt_poczatek' => 713,'id_punkt_koniec' => 169,'punkty_do' => 5,'punkty_od' => 9,'id_pasma' => 27],
            ['id_punkt_poczatek' => 714,'id_punkt_koniec' => 169,'punkty_do' => 10,'punkty_od' => 9,'id_pasma' => 27],

            ['id_punkt_poczatek' => 715,'id_punkt_koniec' => 170,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 27],
            ['id_punkt_poczatek' => 716,'id_punkt_koniec' => 170,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 27],
            ['id_punkt_poczatek' => 717,'id_punkt_koniec' => 170,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 27],

            ['id_punkt_poczatek' => 718,'id_punkt_koniec' => 171,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 27],
            ['id_punkt_poczatek' => 719,'id_punkt_koniec' => 171,'punkty_do' => 11,'punkty_od' => 12,'id_pasma' => 27],

            ['id_punkt_poczatek' => 720,'id_punkt_koniec' => 172,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 27],
            ['id_punkt_poczatek' => 721,'id_punkt_koniec' => 172,'punkty_do' => 8,'punkty_od' => 8,'id_pasma' => 27],

            ['id_punkt_poczatek' => 722,'id_punkt_koniec' => 173,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 27],
            ['id_punkt_poczatek' => 723,'id_punkt_koniec' => 173,'punkty_do' => 17,'punkty_od' => 15,'id_pasma' => 27],
            ['id_punkt_poczatek' => 724,'id_punkt_koniec' => 173,'punkty_do' => 8,'punkty_od' => 7,'id_pasma' => 27],
            ['id_punkt_poczatek' => 725,'id_punkt_koniec' => 173,'punkty_do' => 19,'punkty_od' => 17,'id_pasma' => 27],
            ['id_punkt_poczatek' => 726,'id_punkt_koniec' => 173,'punkty_do' => 11,'punkty_od' => 10,'id_pasma' => 27],

            ['id_punkt_poczatek' => 727,'id_punkt_koniec' => 174,'punkty_do' => 13,'punkty_od' => 12,'id_pasma' => 27],
            ['id_punkt_poczatek' => 728,'id_punkt_koniec' => 174,'punkty_do' => 13,'punkty_od' => 12,'id_pasma' => 27],
            ['id_punkt_poczatek' => 729,'id_punkt_koniec' => 174,'punkty_do' => 13,'punkty_od' => 12,'id_pasma' => 27],
            ['id_punkt_poczatek' => 730,'id_punkt_koniec' => 174,'punkty_do' => 14,'punkty_od' => 13,'id_pasma' => 27],

            ['id_punkt_poczatek' => 731,'id_punkt_koniec' => 175,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 27],
            ['id_punkt_poczatek' => 732,'id_punkt_koniec' => 175,'punkty_do' => 15,'punkty_od' => 14,'id_pasma' => 27],
            
            ['id_punkt_poczatek' => 733,'id_punkt_koniec' => 176,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 27],
            ['id_punkt_poczatek' => 734,'id_punkt_koniec' => 176,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 27],
        ];
        DB::table('odcinek')->insert($dane);
    }
}
