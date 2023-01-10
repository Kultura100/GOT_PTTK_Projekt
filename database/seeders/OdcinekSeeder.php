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

            //Pasmo 28
            ['id_punkt_poczatek' => 735,'id_punkt_koniec' => 177,'punkty_do' => 10,'punkty_od' => 9,'id_pasma' => 28],
            ['id_punkt_poczatek' => 736,'id_punkt_koniec' => 177,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 28],
            ['id_punkt_poczatek' => 737,'id_punkt_koniec' => 177,'punkty_do' => 5,'punkty_od' => 5,'id_pasma' => 28],

            ['id_punkt_poczatek' => 738,'id_punkt_koniec' => 178,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 28],
            ['id_punkt_poczatek' => 739,'id_punkt_koniec' => 178,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 28],
            ['id_punkt_poczatek' => 740,'id_punkt_koniec' => 178,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 28],

            ['id_punkt_poczatek' => 741,'id_punkt_koniec' => 179,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 28],
            ['id_punkt_poczatek' => 742,'id_punkt_koniec' => 179,'punkty_do' => 8,'punkty_od' => 7,'id_pasma' => 28],
            ['id_punkt_poczatek' => 743,'id_punkt_koniec' => 179,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 28],

            ['id_punkt_poczatek' => 744,'id_punkt_koniec' => 180,'punkty_do' => 8,'punkty_od' => 7,'id_pasma' => 28],
            ['id_punkt_poczatek' => 745,'id_punkt_koniec' => 180,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 28],

            ['id_punkt_poczatek' => 746,'id_punkt_koniec' => 181,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 28],
            ['id_punkt_poczatek' => 747,'id_punkt_koniec' => 181,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 28],

            //Pasmo 29
            ['id_punkt_poczatek' => 748,'id_punkt_koniec' => 182,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 29],
            ['id_punkt_poczatek' => 749,'id_punkt_koniec' => 182,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 29],
            ['id_punkt_poczatek' => 750,'id_punkt_koniec' => 182,'punkty_do' => 14,'punkty_od' => 14,'id_pasma' => 29],

            ['id_punkt_poczatek' => 751,'id_punkt_koniec' => 183,'punkty_do' => 10,'punkty_od' => 8,'id_pasma' => 29],
            ['id_punkt_poczatek' => 752,'id_punkt_koniec' => 183,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 29],
            ['id_punkt_poczatek' => 753,'id_punkt_koniec' => 183,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 29],

            ['id_punkt_poczatek' => 754,'id_punkt_koniec' => 184,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 29],
            ['id_punkt_poczatek' => 755,'id_punkt_koniec' => 184,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 29],
            ['id_punkt_poczatek' => 756,'id_punkt_koniec' => 184,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 29],

            ['id_punkt_poczatek' => 757,'id_punkt_koniec' => 185,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 29],
            ['id_punkt_poczatek' => 758,'id_punkt_koniec' => 185,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 29],

            ['id_punkt_poczatek' => 759,'id_punkt_koniec' => 186,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 29],
            ['id_punkt_poczatek' => 760,'id_punkt_koniec' => 186,'punkty_do' => 9,'punkty_od' => 8,'id_pasma' => 29],
            ['id_punkt_poczatek' => 761,'id_punkt_koniec' => 186,'punkty_do' => 8,'punkty_od' => 7,'id_pasma' => 29],

            ['id_punkt_poczatek' => 762,'id_punkt_koniec' => 187,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 29],
            ['id_punkt_poczatek' => 763,'id_punkt_koniec' => 187,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 29],

            //Pasmo 30
            ['id_punkt_poczatek' => 764,'id_punkt_koniec' => 188,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 30],
            ['id_punkt_poczatek' => 765,'id_punkt_koniec' => 188,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 30],
            ['id_punkt_poczatek' => 766,'id_punkt_koniec' => 188,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 30],
            ['id_punkt_poczatek' => 767,'id_punkt_koniec' => 188,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 30],

            ['id_punkt_poczatek' => 768,'id_punkt_koniec' => 189,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 30],
            ['id_punkt_poczatek' => 769,'id_punkt_koniec' => 189,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 30],
            ['id_punkt_poczatek' => 770,'id_punkt_koniec' => 189,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 30],

            ['id_punkt_poczatek' => 771,'id_punkt_koniec' => 190,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 30],
            ['id_punkt_poczatek' => 772,'id_punkt_koniec' => 190,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 30],
            ['id_punkt_poczatek' => 773,'id_punkt_koniec' => 190,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 30],

            ['id_punkt_poczatek' => 774,'id_punkt_koniec' => 191,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 30],
            ['id_punkt_poczatek' => 775,'id_punkt_koniec' => 191,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 30],
            ['id_punkt_poczatek' => 776,'id_punkt_koniec' => 191,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 30],

            ['id_punkt_poczatek' => 777,'id_punkt_koniec' => 192,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 30],
            ['id_punkt_poczatek' => 778,'id_punkt_koniec' => 192,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 30],

            ['id_punkt_poczatek' => 779,'id_punkt_koniec' => 193,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 30],
            ['id_punkt_poczatek' => 780,'id_punkt_koniec' => 193,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 30],
            ['id_punkt_poczatek' => 781,'id_punkt_koniec' => 193,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 30],
            ['id_punkt_poczatek' => 782,'id_punkt_koniec' => 193,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 30],

            //Pasmo 31
            ['id_punkt_poczatek' => 783,'id_punkt_koniec' => 194,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 31],
            ['id_punkt_poczatek' => 784,'id_punkt_koniec' => 194,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 31],
            ['id_punkt_poczatek' => 785,'id_punkt_koniec' => 194,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 31],

            ['id_punkt_poczatek' => 786,'id_punkt_koniec' => 195,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 31],
            ['id_punkt_poczatek' => 787,'id_punkt_koniec' => 195,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 31],

            ['id_punkt_poczatek' => 788,'id_punkt_koniec' => 196,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 31],
            ['id_punkt_poczatek' => 789,'id_punkt_koniec' => 196,'punkty_do' => 9,'punkty_od' => 8,'id_pasma' => 31],
            ['id_punkt_poczatek' => 790,'id_punkt_koniec' => 196,'punkty_do' => 9,'punkty_od' => 8,'id_pasma' => 31],

            ['id_punkt_poczatek' => 791,'id_punkt_koniec' => 197,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 31],
            ['id_punkt_poczatek' => 792,'id_punkt_koniec' => 197,'punkty_do' => 7,'punkty_od' => 7,'id_pasma' => 31],
            ['id_punkt_poczatek' => 793,'id_punkt_koniec' => 197,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 31],

            ['id_punkt_poczatek' => 794,'id_punkt_koniec' => 198,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 31],
            ['id_punkt_poczatek' => 795,'id_punkt_koniec' => 198,'punkty_do' => 12,'punkty_od' => 9,'id_pasma' => 31],
            ['id_punkt_poczatek' => 796,'id_punkt_koniec' => 198,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 31],
            ['id_punkt_poczatek' => 797,'id_punkt_koniec' => 198,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 31],

            ['id_punkt_poczatek' => 798,'id_punkt_koniec' => 199,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 31],
            ['id_punkt_poczatek' => 799,'id_punkt_koniec' => 199,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 31],
            ['id_punkt_poczatek' => 800,'id_punkt_koniec' => 199,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 31],
            ['id_punkt_poczatek' => 801,'id_punkt_koniec' => 199,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 31],

            //Pasmo 32
            ['id_punkt_poczatek' => 802,'id_punkt_koniec' => 200,'punkty_do' => 10,'punkty_od' => 4,'id_pasma' => 32],
            ['id_punkt_poczatek' => 803,'id_punkt_koniec' => 200,'punkty_do' => 7,'punkty_od' => 3,'id_pasma' => 32],
            ['id_punkt_poczatek' => 804,'id_punkt_koniec' => 200,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 32],
            ['id_punkt_poczatek' => 805,'id_punkt_koniec' => 200,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 32],

            ['id_punkt_poczatek' => 806,'id_punkt_koniec' => 201,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 32],
            ['id_punkt_poczatek' => 807,'id_punkt_koniec' => 201,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 32],

            ['id_punkt_poczatek' => 808,'id_punkt_koniec' => 202,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 32],
            ['id_punkt_poczatek' => 809,'id_punkt_koniec' => 202,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 32],
            ['id_punkt_poczatek' => 810,'id_punkt_koniec' => 202,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 32],
            ['id_punkt_poczatek' => 811,'id_punkt_koniec' => 202,'punkty_do' => 10,'punkty_od' => 5,'id_pasma' => 32],

            ['id_punkt_poczatek' => 812,'id_punkt_koniec' => 203,'punkty_do' => 10,'punkty_od' => 5,'id_pasma' => 32],
            ['id_punkt_poczatek' => 813,'id_punkt_koniec' => 203,'punkty_do' => 10,'punkty_od' => 5,'id_pasma' => 32],
            ['id_punkt_poczatek' => 814,'id_punkt_koniec' => 203,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 32],

            ['id_punkt_poczatek' => 815,'id_punkt_koniec' => 204,'punkty_do' => 4,'punkty_od' => 5,'id_pasma' => 32],
            ['id_punkt_poczatek' => 816,'id_punkt_koniec' => 204,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 32],
            ['id_punkt_poczatek' => 817,'id_punkt_koniec' => 204,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 32],

            ['id_punkt_poczatek' => 818,'id_punkt_koniec' => 205,'punkty_do' => 9,'punkty_od' => 5,'id_pasma' => 32],
            ['id_punkt_poczatek' => 819,'id_punkt_koniec' => 205,'punkty_do' => 8,'punkty_od' => 4,'id_pasma' => 32],
            ['id_punkt_poczatek' => 820,'id_punkt_koniec' => 205,'punkty_do' => 7,'punkty_od' => 3,'id_pasma' => 32],
            ['id_punkt_poczatek' => 821,'id_punkt_koniec' => 205,'punkty_do' => 10,'punkty_od' => 10,'id_pasma' => 32],

            //Pasmo 33
            ['id_punkt_poczatek' => 822,'id_punkt_koniec' => 206,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 33],
            ['id_punkt_poczatek' => 823,'id_punkt_koniec' => 206,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 33],
            ['id_punkt_poczatek' => 824,'id_punkt_koniec' => 206,'punkty_do' => 5,'punkty_od' => 5,'id_pasma' => 33],

            ['id_punkt_poczatek' => 825,'id_punkt_koniec' => 207,'punkty_do' => 11,'punkty_od' => 9,'id_pasma' => 33],
            ['id_punkt_poczatek' => 826,'id_punkt_koniec' => 207,'punkty_do' => 9,'punkty_od' => 7,'id_pasma' => 33],
            ['id_punkt_poczatek' => 827,'id_punkt_koniec' => 207,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 33],

            ['id_punkt_poczatek' => 828,'id_punkt_koniec' => 208,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 33],
            ['id_punkt_poczatek' => 829,'id_punkt_koniec' => 208,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 33],
            ['id_punkt_poczatek' => 830,'id_punkt_koniec' => 208,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 33],

            ['id_punkt_poczatek' => 831,'id_punkt_koniec' => 209,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 33],
            ['id_punkt_poczatek' => 832,'id_punkt_koniec' => 209,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 33],
            ['id_punkt_poczatek' => 833,'id_punkt_koniec' => 209,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 33],
            ['id_punkt_poczatek' => 834,'id_punkt_koniec' => 209,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 33],

            ['id_punkt_poczatek' => 835,'id_punkt_koniec' => 210,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 33],
            ['id_punkt_poczatek' => 836,'id_punkt_koniec' => 210,'punkty_do' => 9,'punkty_od' => 6,'id_pasma' => 33],
            ['id_punkt_poczatek' => 837,'id_punkt_koniec' => 210,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 33],
            ['id_punkt_poczatek' => 838,'id_punkt_koniec' => 210,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 33],
            ['id_punkt_poczatek' => 839,'id_punkt_koniec' => 210,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 33],

            ['id_punkt_poczatek' => 840,'id_punkt_koniec' => 211,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 33],

            //Pasmo 34
            ['id_punkt_poczatek' => 841,'id_punkt_koniec' => 212,'punkty_do' => 10,'punkty_od' => 7,'id_pasma' => 34],
            ['id_punkt_poczatek' => 842,'id_punkt_koniec' => 212,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 34],
            ['id_punkt_poczatek' => 843,'id_punkt_koniec' => 212,'punkty_do' => 6,'punkty_od' => 2,'id_pasma' => 34],
            ['id_punkt_poczatek' => 844,'id_punkt_koniec' => 212,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 34],
            ['id_punkt_poczatek' => 845,'id_punkt_koniec' => 212,'punkty_do' => 1,'punkty_od' => 2,'id_pasma' => 34],

            ['id_punkt_poczatek' => 846,'id_punkt_koniec' => 213,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 34],
            ['id_punkt_poczatek' => 847,'id_punkt_koniec' => 213,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 34],
            ['id_punkt_poczatek' => 848,'id_punkt_koniec' => 213,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 34],

            ['id_punkt_poczatek' => 849,'id_punkt_koniec' => 214,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 34],
            ['id_punkt_poczatek' => 850,'id_punkt_koniec' => 214,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 34],
            ['id_punkt_poczatek' => 851,'id_punkt_koniec' => 214,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 34],
            ['id_punkt_poczatek' => 852,'id_punkt_koniec' => 214,'punkty_do' => 3,'punkty_od' => 5,'id_pasma' => 34],

            ['id_punkt_poczatek' => 853,'id_punkt_koniec' => 215,'punkty_do' => 1,'punkty_od' => 2,'id_pasma' => 34],
            ['id_punkt_poczatek' => 854,'id_punkt_koniec' => 215,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 34],
            ['id_punkt_poczatek' => 855,'id_punkt_koniec' => 215,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 34],
            ['id_punkt_poczatek' => 856,'id_punkt_koniec' => 215,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 34],

            ['id_punkt_poczatek' => 857,'id_punkt_koniec' => 216,'punkty_do' => 9,'punkty_od' => 5,'id_pasma' => 34],
            ['id_punkt_poczatek' => 858,'id_punkt_koniec' => 216,'punkty_do' => 11,'punkty_od' => 6,'id_pasma' => 34],
            ['id_punkt_poczatek' => 859,'id_punkt_koniec' => 216,'punkty_do' => 11,'punkty_od' => 5,'id_pasma' => 34],
            ['id_punkt_poczatek' => 860,'id_punkt_koniec' => 216,'punkty_do' => 10,'punkty_od' => 5,'id_pasma' => 34],
            ['id_punkt_poczatek' => 861,'id_punkt_koniec' => 216,'punkty_do' => 5,'punkty_od' => 5,'id_pasma' => 34],

            ['id_punkt_poczatek' => 862,'id_punkt_koniec' => 217,'punkty_do' => 5,'punkty_od' => 2,'id_pasma' => 34],
            ['id_punkt_poczatek' => 863,'id_punkt_koniec' => 217,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 34],

            //Pasmo 35
            ['id_punkt_poczatek' => 864,'id_punkt_koniec' => 218,'punkty_do' => 7,'punkty_od' => 7,'id_pasma' => 35],
            ['id_punkt_poczatek' => 865,'id_punkt_koniec' => 218,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 35],
            ['id_punkt_poczatek' => 866,'id_punkt_koniec' => 218,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 35],

            ['id_punkt_poczatek' => 867,'id_punkt_koniec' => 219,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 35],
            ['id_punkt_poczatek' => 868,'id_punkt_koniec' => 219,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 35],
            ['id_punkt_poczatek' => 869,'id_punkt_koniec' => 219,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 35],

            ['id_punkt_poczatek' => 870,'id_punkt_koniec' => 220,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 35],
            ['id_punkt_poczatek' => 871,'id_punkt_koniec' => 220,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 35],
            ['id_punkt_poczatek' => 872,'id_punkt_koniec' => 220,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 35],

            ['id_punkt_poczatek' => 873,'id_punkt_koniec' => 221,'punkty_do' => 5,'punkty_od' => 6,'id_pasma' => 35],
            ['id_punkt_poczatek' => 874,'id_punkt_koniec' => 221,'punkty_do' => 3,'punkty_od' => 4,'id_pasma' => 35],
            ['id_punkt_poczatek' => 875,'id_punkt_koniec' => 221,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 35],

            ['id_punkt_poczatek' => 876,'id_punkt_koniec' => 222,'punkty_do' => 4,'punkty_od' => 5,'id_pasma' => 35],
            ['id_punkt_poczatek' => 877,'id_punkt_koniec' => 222,'punkty_do' => 2,'punkty_od' => 4,'id_pasma' => 35],

            ['id_punkt_poczatek' => 878,'id_punkt_koniec' => 223,'punkty_do' => 3,'punkty_od' => 4,'id_pasma' => 35],
            ['id_punkt_poczatek' => 879,'id_punkt_koniec' => 223,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 35],

            //Pasmo 36
            ['id_punkt_poczatek' => 880,'id_punkt_koniec' => 224,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 36],
            ['id_punkt_poczatek' => 881,'id_punkt_koniec' => 224,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 36],

            ['id_punkt_poczatek' => 882,'id_punkt_koniec' => 225,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 36],
            ['id_punkt_poczatek' => 883,'id_punkt_koniec' => 225,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 36],
            ['id_punkt_poczatek' => 884,'id_punkt_koniec' => 225,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 36],
            ['id_punkt_poczatek' => 885,'id_punkt_koniec' => 225,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 36],

            ['id_punkt_poczatek' => 886,'id_punkt_koniec' => 226,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 36],
            ['id_punkt_poczatek' => 887,'id_punkt_koniec' => 226,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 36],
            ['id_punkt_poczatek' => 888,'id_punkt_koniec' => 226,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 36],
            ['id_punkt_poczatek' => 889,'id_punkt_koniec' => 226,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 36],
            ['id_punkt_poczatek' => 890,'id_punkt_koniec' => 226,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 36],

            ['id_punkt_poczatek' => 891,'id_punkt_koniec' => 227,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 36],
            ['id_punkt_poczatek' => 892,'id_punkt_koniec' => 227,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 36],
            ['id_punkt_poczatek' => 893,'id_punkt_koniec' => 227,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 36],
            ['id_punkt_poczatek' => 894,'id_punkt_koniec' => 227,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 36],

            ['id_punkt_poczatek' => 895,'id_punkt_koniec' => 228,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 36],
            ['id_punkt_poczatek' => 896,'id_punkt_koniec' => 228,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 36],
            ['id_punkt_poczatek' => 897,'id_punkt_koniec' => 228,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 36],

            ['id_punkt_poczatek' => 898,'id_punkt_koniec' => 229,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 36],
            ['id_punkt_poczatek' => 899,'id_punkt_koniec' => 229,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 36],
            ['id_punkt_poczatek' => 900,'id_punkt_koniec' => 229,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 36],

            //Pasmo 37
            ['id_punkt_poczatek' => 901,'id_punkt_koniec' => 230,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 37],
            ['id_punkt_poczatek' => 902,'id_punkt_koniec' => 230,'punkty_do' => 8,'punkty_od' => 7,'id_pasma' => 37],
            ['id_punkt_poczatek' => 903,'id_punkt_koniec' => 230,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 37],

            ['id_punkt_poczatek' => 904,'id_punkt_koniec' => 231,'punkty_do' => 9,'punkty_od' => 7,'id_pasma' => 37],
            ['id_punkt_poczatek' => 905,'id_punkt_koniec' => 231,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 37],
            ['id_punkt_poczatek' => 906,'id_punkt_koniec' => 231,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 37],

            ['id_punkt_poczatek' => 907,'id_punkt_koniec' => 232,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 37],
            ['id_punkt_poczatek' => 908,'id_punkt_koniec' => 232,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 37],
            ['id_punkt_poczatek' => 909,'id_punkt_koniec' => 232,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 37],

            ['id_punkt_poczatek' => 910,'id_punkt_koniec' => 233,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 37],
            ['id_punkt_poczatek' => 911,'id_punkt_koniec' => 233,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 37],

            ['id_punkt_poczatek' => 912,'id_punkt_koniec' => 234,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 37],
            ['id_punkt_poczatek' => 913,'id_punkt_koniec' => 234,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 37],
            ['id_punkt_poczatek' => 914,'id_punkt_koniec' => 234,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 37],
            ['id_punkt_poczatek' => 915,'id_punkt_koniec' => 234,'punkty_do' => 5,'punkty_od' => 5,'id_pasma' => 37],

            ['id_punkt_poczatek' => 916,'id_punkt_koniec' => 235,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 37],
            ['id_punkt_poczatek' => 917,'id_punkt_koniec' => 235,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 37],
            ['id_punkt_poczatek' => 918,'id_punkt_koniec' => 235,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 37],

            //Pasmo 38
            ['id_punkt_poczatek' => 919,'id_punkt_koniec' => 236,'punkty_do' => 10,'punkty_od' => 10,'id_pasma' => 38],
            ['id_punkt_poczatek' => 920,'id_punkt_koniec' => 236,'punkty_do' => 9,'punkty_od' => 9,'id_pasma' => 38],
            ['id_punkt_poczatek' => 921,'id_punkt_koniec' => 236,'punkty_do' => 9,'punkty_od' => 9,'id_pasma' => 38],
            ['id_punkt_poczatek' => 922,'id_punkt_koniec' => 236,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 38],

            ['id_punkt_poczatek' => 923,'id_punkt_koniec' => 237,'punkty_do' => 10,'punkty_od' => 10,'id_pasma' => 38],
            ['id_punkt_poczatek' => 924,'id_punkt_koniec' => 237,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 38],

            ['id_punkt_poczatek' => 925,'id_punkt_koniec' => 238,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 38],
            ['id_punkt_poczatek' => 926,'id_punkt_koniec' => 238,'punkty_do' => 7,'punkty_od' => 7,'id_pasma' => 38],

            ['id_punkt_poczatek' => 927,'id_punkt_koniec' => 239,'punkty_do' => 8,'punkty_od' => 8,'id_pasma' => 38],
            ['id_punkt_poczatek' => 928,'id_punkt_koniec' => 239,'punkty_do' => 7,'punkty_od' => 7,'id_pasma' => 38],

            ['id_punkt_poczatek' => 929,'id_punkt_koniec' => 240,'punkty_do' => 7,'punkty_od' => 7,'id_pasma' => 38],
            ['id_punkt_poczatek' => 930,'id_punkt_koniec' => 240,'punkty_do' => 7,'punkty_od' => 7,'id_pasma' => 38],
            ['id_punkt_poczatek' => 931,'id_punkt_koniec' => 240,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 38],

            ['id_punkt_poczatek' => 932,'id_punkt_koniec' => 241,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 38],
            ['id_punkt_poczatek' => 933,'id_punkt_koniec' => 241,'punkty_do' => 5,'punkty_od' => 5,'id_pasma' => 38],
            ['id_punkt_poczatek' => 934,'id_punkt_koniec' => 241,'punkty_do' => 5,'punkty_od' => 5,'id_pasma' => 38],

            //Pasmo 39
            ['id_punkt_poczatek' => 935,'id_punkt_koniec' => 242,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 39],
            ['id_punkt_poczatek' => 936,'id_punkt_koniec' => 242,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 39],
            ['id_punkt_poczatek' => 937,'id_punkt_koniec' => 242,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 39],
            ['id_punkt_poczatek' => 938,'id_punkt_koniec' => 242,'punkty_do' => 7,'punkty_od' => 7,'id_pasma' => 39],

            ['id_punkt_poczatek' => 939,'id_punkt_koniec' => 243,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 39],
            ['id_punkt_poczatek' => 940,'id_punkt_koniec' => 243,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 39],
            ['id_punkt_poczatek' => 941,'id_punkt_koniec' => 243,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 39],

            ['id_punkt_poczatek' => 942,'id_punkt_koniec' => 244,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 39],
            ['id_punkt_poczatek' => 943,'id_punkt_koniec' => 244,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 39],
            ['id_punkt_poczatek' => 944,'id_punkt_koniec' => 244,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 39],

            ['id_punkt_poczatek' => 945,'id_punkt_koniec' => 245,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 39],
            ['id_punkt_poczatek' => 946,'id_punkt_koniec' => 245,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 39],
            ['id_punkt_poczatek' => 947,'id_punkt_koniec' => 245,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 39],

            ['id_punkt_poczatek' => 948,'id_punkt_koniec' => 246,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 39],
            ['id_punkt_poczatek' => 949,'id_punkt_koniec' => 246,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 39],
            ['id_punkt_poczatek' => 950,'id_punkt_koniec' => 246,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 39],
            ['id_punkt_poczatek' => 951,'id_punkt_koniec' => 246,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 39],
            ['id_punkt_poczatek' => 952,'id_punkt_koniec' => 246,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 39],

            ['id_punkt_poczatek' => 953,'id_punkt_koniec' => 247,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 39],
            ['id_punkt_poczatek' => 954,'id_punkt_koniec' => 247,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 39],
            ['id_punkt_poczatek' => 955,'id_punkt_koniec' => 247,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 39],
            ['id_punkt_poczatek' => 956,'id_punkt_koniec' => 247,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 39],
            ['id_punkt_poczatek' => 957,'id_punkt_koniec' => 247,'punkty_do' => 5,'punkty_od' => 5,'id_pasma' => 39],

            //Pasmo 40
            ['id_punkt_poczatek' => 958,'id_punkt_koniec' => 248,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 40],
            ['id_punkt_poczatek' => 959,'id_punkt_koniec' => 248,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 40],
            ['id_punkt_poczatek' => 960,'id_punkt_koniec' => 248,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 40],

            ['id_punkt_poczatek' => 961,'id_punkt_koniec' => 249,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 40],
            ['id_punkt_poczatek' => 962,'id_punkt_koniec' => 249,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 40],
            ['id_punkt_poczatek' => 963,'id_punkt_koniec' => 249,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 40],
            ['id_punkt_poczatek' => 964,'id_punkt_koniec' => 249,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 40],
            ['id_punkt_poczatek' => 965,'id_punkt_koniec' => 249,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 40],

            ['id_punkt_poczatek' => 966,'id_punkt_koniec' => 250,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 40],
            ['id_punkt_poczatek' => 967,'id_punkt_koniec' => 250,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 40],
            ['id_punkt_poczatek' => 968,'id_punkt_koniec' => 250,'punkty_do' => 9,'punkty_od' => 6,'id_pasma' => 40],
            ['id_punkt_poczatek' => 969,'id_punkt_koniec' => 250,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 40],
            ['id_punkt_poczatek' => 970,'id_punkt_koniec' => 250,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 40],

            ['id_punkt_poczatek' => 971,'id_punkt_koniec' => 251,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 40],
            ['id_punkt_poczatek' => 972,'id_punkt_koniec' => 251,'punkty_do' => 6,'punkty_od' => 2,'id_pasma' => 40],
            ['id_punkt_poczatek' => 973,'id_punkt_koniec' => 251,'punkty_do' => 10,'punkty_od' => 5,'id_pasma' => 40],

            ['id_punkt_poczatek' => 974,'id_punkt_koniec' => 252,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 40],
            ['id_punkt_poczatek' => 975,'id_punkt_koniec' => 252,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 40],
            ['id_punkt_poczatek' => 976,'id_punkt_koniec' => 252,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 40],

            ['id_punkt_poczatek' => 977,'id_punkt_koniec' => 253,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 40],
            ['id_punkt_poczatek' => 978,'id_punkt_koniec' => 253,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 40],
            ['id_punkt_poczatek' => 979,'id_punkt_koniec' => 253,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 40],

            //Pasmo 41
            ['id_punkt_poczatek' => 980,'id_punkt_koniec' => 254,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 41],
            ['id_punkt_poczatek' => 981,'id_punkt_koniec' => 254,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 41],
            ['id_punkt_poczatek' => 982,'id_punkt_koniec' => 254,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 41],

            ['id_punkt_poczatek' => 983,'id_punkt_koniec' => 255,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 41],
            ['id_punkt_poczatek' => 984,'id_punkt_koniec' => 255,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 41],
            ['id_punkt_poczatek' => 985,'id_punkt_koniec' => 255,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 41],

            ['id_punkt_poczatek' => 986,'id_punkt_koniec' => 256,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 41],
            ['id_punkt_poczatek' => 987,'id_punkt_koniec' => 256,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 41],
            ['id_punkt_poczatek' => 988,'id_punkt_koniec' => 256,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 41],

            ['id_punkt_poczatek' => 989,'id_punkt_koniec' => 257,'punkty_do' => 5,'punkty_od' => 6,'id_pasma' => 41],
            ['id_punkt_poczatek' => 990,'id_punkt_koniec' => 257,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 41],
            ['id_punkt_poczatek' => 991,'id_punkt_koniec' => 257,'punkty_do' => 5,'punkty_od' => 8,'id_pasma' => 41],
            ['id_punkt_poczatek' => 992,'id_punkt_koniec' => 257,'punkty_do' => 7,'punkty_od' => 10,'id_pasma' => 41],

            ['id_punkt_poczatek' => 993,'id_punkt_koniec' => 258,'punkty_do' => 6,'punkty_od' => 10,'id_pasma' => 41],
            ['id_punkt_poczatek' => 994,'id_punkt_koniec' => 258,'punkty_do' => 6,'punkty_od' => 9,'id_pasma' => 41],

            ['id_punkt_poczatek' => 995,'id_punkt_koniec' => 259,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 41],
            ['id_punkt_poczatek' => 996,'id_punkt_koniec' => 259,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 41],
            ['id_punkt_poczatek' => 997,'id_punkt_koniec' => 259,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 41],

            //Pasmo 42
            ['id_punkt_poczatek' => 998,'id_punkt_koniec' => 260,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 42],
            ['id_punkt_poczatek' => 999,'id_punkt_koniec' => 260,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 42],
            ['id_punkt_poczatek' => 1000,'id_punkt_koniec' => 260,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 42],
            ['id_punkt_poczatek' => 1001,'id_punkt_koniec' => 260,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 42],
            ['id_punkt_poczatek' => 1002,'id_punkt_koniec' => 260,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 42],

            ['id_punkt_poczatek' => 1003,'id_punkt_koniec' => 261,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 42],
            ['id_punkt_poczatek' => 1004,'id_punkt_koniec' => 261,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 42],
            ['id_punkt_poczatek' => 1005,'id_punkt_koniec' => 261,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 42],

            ['id_punkt_poczatek' => 1006,'id_punkt_koniec' => 262,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 42],
            ['id_punkt_poczatek' => 1007,'id_punkt_koniec' => 262,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 42],
            ['id_punkt_poczatek' => 1008,'id_punkt_koniec' => 262,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 42],

            ['id_punkt_poczatek' => 1009,'id_punkt_koniec' => 263,'punkty_do' => 8,'punkty_od' => 7,'id_pasma' => 42],
            ['id_punkt_poczatek' => 1010,'id_punkt_koniec' => 263,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 42],
            
            ['id_punkt_poczatek' => 1011,'id_punkt_koniec' => 264,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 42],
            ['id_punkt_poczatek' => 1012,'id_punkt_koniec' => 264,'punkty_do' => 11,'punkty_od' => 9,'id_pasma' => 42],
            ['id_punkt_poczatek' => 1013,'id_punkt_koniec' => 264,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 42],
            ['id_punkt_poczatek' => 1014,'id_punkt_koniec' => 264,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 42],
            ['id_punkt_poczatek' => 1015,'id_punkt_koniec' => 264,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 42],

            ['id_punkt_poczatek' => 1016,'id_punkt_koniec' => 265,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 42],
            ['id_punkt_poczatek' => 1017,'id_punkt_koniec' => 265,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 42],
            ['id_punkt_poczatek' => 1018,'id_punkt_koniec' => 265,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 42],

            //Pasmo 43
            ['id_punkt_poczatek' => 1019,'id_punkt_koniec' => 266,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 43],
            ['id_punkt_poczatek' => 1020,'id_punkt_koniec' => 266,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 43],
            ['id_punkt_poczatek' => 1021,'id_punkt_koniec' => 266,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 43],
            ['id_punkt_poczatek' => 1022,'id_punkt_koniec' => 266,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 43],
            ['id_punkt_poczatek' => 1023,'id_punkt_koniec' => 266,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 43],

            ['id_punkt_poczatek' => 1024,'id_punkt_koniec' => 267,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 43],
            ['id_punkt_poczatek' => 1025,'id_punkt_koniec' => 267,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 43],
            ['id_punkt_poczatek' => 1026,'id_punkt_koniec' => 267,'punkty_do' => 9,'punkty_od' => 6,'id_pasma' => 43],

            ['id_punkt_poczatek' => 1027,'id_punkt_koniec' => 268,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 43],
            ['id_punkt_poczatek' => 1028,'id_punkt_koniec' => 268,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 43],

            ['id_punkt_poczatek' => 1029,'id_punkt_koniec' => 269,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 43],
            ['id_punkt_poczatek' => 1030,'id_punkt_koniec' => 269,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 43],
            ['id_punkt_poczatek' => 1031,'id_punkt_koniec' => 269,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 43],

            ['id_punkt_poczatek' => 1032,'id_punkt_koniec' => 270,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 43],
            ['id_punkt_poczatek' => 1033,'id_punkt_koniec' => 270,'punkty_do' => 3,'punkty_od' => 4,'id_pasma' => 43],
            ['id_punkt_poczatek' => 1034,'id_punkt_koniec' => 270,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 43],
            ['id_punkt_poczatek' => 1035,'id_punkt_koniec' => 270,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 43],

            ['id_punkt_poczatek' => 1036,'id_punkt_koniec' => 271,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 43],
            ['id_punkt_poczatek' => 1037,'id_punkt_koniec' => 271,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 43],

            //Pasmo 44
            ['id_punkt_poczatek' => 1038,'id_punkt_koniec' => 272,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 44],
            ['id_punkt_poczatek' => 1039,'id_punkt_koniec' => 272,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 44],
            ['id_punkt_poczatek' => 1040,'id_punkt_koniec' => 272,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 44],

            ['id_punkt_poczatek' => 1041,'id_punkt_koniec' => 273,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 44],
            ['id_punkt_poczatek' => 1042,'id_punkt_koniec' => 273,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 44],
            ['id_punkt_poczatek' => 1043,'id_punkt_koniec' => 273,'punkty_do' => 5,'punkty_od' => 2,'id_pasma' => 44],

            ['id_punkt_poczatek' => 1044,'id_punkt_koniec' => 274,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 44],
            ['id_punkt_poczatek' => 1045,'id_punkt_koniec' => 274,'punkty_do' => 5,'punkty_od' => 2,'id_pasma' => 44],
            ['id_punkt_poczatek' => 1046,'id_punkt_koniec' => 274,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 44],

            ['id_punkt_poczatek' => 1047,'id_punkt_koniec' => 275,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 44],
            ['id_punkt_poczatek' => 1048,'id_punkt_koniec' => 275,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 44],

            ['id_punkt_poczatek' => 1049,'id_punkt_koniec' => 276,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 44],
            ['id_punkt_poczatek' => 1050,'id_punkt_koniec' => 276,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 44],

            ['id_punkt_poczatek' => 1051,'id_punkt_koniec' => 277,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 44],
            ['id_punkt_poczatek' => 1052,'id_punkt_koniec' => 277,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 44],
            ['id_punkt_poczatek' => 1053,'id_punkt_koniec' => 277,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 44],

            //Pasmo 45
            ['id_punkt_poczatek' => 1054,'id_punkt_koniec' => 278,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 45],
            ['id_punkt_poczatek' => 1055,'id_punkt_koniec' => 278,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 45],
            ['id_punkt_poczatek' => 1056,'id_punkt_koniec' => 278,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 45],
            ['id_punkt_poczatek' => 1057,'id_punkt_koniec' => 278,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 45],
            ['id_punkt_poczatek' => 1058,'id_punkt_koniec' => 278,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 45],

            ['id_punkt_poczatek' => 1059,'id_punkt_koniec' => 279,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 45],
            ['id_punkt_poczatek' => 1060,'id_punkt_koniec' => 279,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 45],
            ['id_punkt_poczatek' => 1061,'id_punkt_koniec' => 279,'punkty_do' => 3,'punkty_od' => 4,'id_pasma' => 45],

            ['id_punkt_poczatek' => 1062,'id_punkt_koniec' => 280,'punkty_do' => 5,'punkty_od' => 2,'id_pasma' => 45],
            ['id_punkt_poczatek' => 1063,'id_punkt_koniec' => 280,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 45],

            ['id_punkt_poczatek' => 1064,'id_punkt_koniec' => 281,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 45],
            ['id_punkt_poczatek' => 1065,'id_punkt_koniec' => 281,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 45],
            ['id_punkt_poczatek' => 1066,'id_punkt_koniec' => 281,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 45],

            ['id_punkt_poczatek' => 1067,'id_punkt_koniec' => 282,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 45],

            ['id_punkt_poczatek' => 1068,'id_punkt_koniec' => 283,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 45],
            ['id_punkt_poczatek' => 1069,'id_punkt_koniec' => 283,'punkty_do' => 10,'punkty_od' => 6,'id_pasma' => 45],

            //Pasmo 46
            ['id_punkt_poczatek' => 1070,'id_punkt_koniec' => 284,'punkty_do' => 7,'punkty_od' => 9,'id_pasma' => 46],
            ['id_punkt_poczatek' => 1071,'id_punkt_koniec' => 284,'punkty_do' => 1,'punkty_od' => 2,'id_pasma' => 46],
            ['id_punkt_poczatek' => 1072,'id_punkt_koniec' => 284,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 46],

            ['id_punkt_poczatek' => 1073,'id_punkt_koniec' => 285,'punkty_do' => 6,'punkty_od' => 9,'id_pasma' => 46],

            ['id_punkt_poczatek' => 1074,'id_punkt_koniec' => 286,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 46],
            ['id_punkt_poczatek' => 1075,'id_punkt_koniec' => 286,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 46],

            ['id_punkt_poczatek' => 1076,'id_punkt_koniec' => 287,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 46],
            ['id_punkt_poczatek' => 1077,'id_punkt_koniec' => 287,'punkty_do' => 8,'punkty_od' => 13,'id_pasma' => 46],
            ['id_punkt_poczatek' => 1078,'id_punkt_koniec' => 287,'punkty_do' => 5,'punkty_od' => 10,'id_pasma' => 46],

            ['id_punkt_poczatek' => 1079,'id_punkt_koniec' => 288,'punkty_do' => 4,'punkty_od' => 6,'id_pasma' => 46],
            ['id_punkt_poczatek' => 1080,'id_punkt_koniec' => 288,'punkty_do' => 10,'punkty_od' => 12,'id_pasma' => 46],

            ['id_punkt_poczatek' => 1081,'id_punkt_koniec' => 289,'punkty_do' => 14,'punkty_od' => 12,'id_pasma' => 46],
            ['id_punkt_poczatek' => 1082,'id_punkt_koniec' => 289,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 46],

            //Pasmo 47
            ['id_punkt_poczatek' => 1083,'id_punkt_koniec' => 290,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 47],
            ['id_punkt_poczatek' => 1084,'id_punkt_koniec' => 290,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 47],
            ['id_punkt_poczatek' => 1085,'id_punkt_koniec' => 290,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 47],
            ['id_punkt_poczatek' => 1086,'id_punkt_koniec' => 290,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 47],

            ['id_punkt_poczatek' => 1087,'id_punkt_koniec' => 291,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 47],
            ['id_punkt_poczatek' => 1088,'id_punkt_koniec' => 291,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 47],

            ['id_punkt_poczatek' => 1089,'id_punkt_koniec' => 292,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 47],
            ['id_punkt_poczatek' => 1090,'id_punkt_koniec' => 292,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 47],

            ['id_punkt_poczatek' => 1091,'id_punkt_koniec' => 293,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 47],
            ['id_punkt_poczatek' => 1092,'id_punkt_koniec' => 293,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 47],
            ['id_punkt_poczatek' => 1093,'id_punkt_koniec' => 293,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 47],

            ['id_punkt_poczatek' => 1094,'id_punkt_koniec' => 294,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 47],
            ['id_punkt_poczatek' => 1095,'id_punkt_koniec' => 294,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 47],
            ['id_punkt_poczatek' => 1096,'id_punkt_koniec' => 294,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 47],

            ['id_punkt_poczatek' => 1097,'id_punkt_koniec' => 295,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 47],
            ['id_punkt_poczatek' => 1098,'id_punkt_koniec' => 295,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 47],
            ['id_punkt_poczatek' => 1099,'id_punkt_koniec' => 295,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 47],
            ['id_punkt_poczatek' => 1100,'id_punkt_koniec' => 295,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 47],

            //Pasmo 48
            ['id_punkt_poczatek' => 1101,'id_punkt_koniec' => 296,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 48],
            ['id_punkt_poczatek' => 1102,'id_punkt_koniec' => 296,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 48],

            ['id_punkt_poczatek' => 1103,'id_punkt_koniec' => 297,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 48],
            ['id_punkt_poczatek' => 1104,'id_punkt_koniec' => 297,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 48],

            ['id_punkt_poczatek' => 1105,'id_punkt_koniec' => 298,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 48],
            ['id_punkt_poczatek' => 1106,'id_punkt_koniec' => 298,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 48],
            ['id_punkt_poczatek' => 1107,'id_punkt_koniec' => 298,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 48],
            ['id_punkt_poczatek' => 1108,'id_punkt_koniec' => 298,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 48],

            ['id_punkt_poczatek' => 1109,'id_punkt_koniec' => 299,'punkty_do' => 10,'punkty_od' => 6,'id_pasma' => 48],
            ['id_punkt_poczatek' => 1110,'id_punkt_koniec' => 299,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 48],
            ['id_punkt_poczatek' => 1111,'id_punkt_koniec' => 299,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 48],

            ['id_punkt_poczatek' => 1112,'id_punkt_koniec' => 300,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 48],
            ['id_punkt_poczatek' => 1113,'id_punkt_koniec' => 300,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 48],
            ['id_punkt_poczatek' => 1114,'id_punkt_koniec' => 300,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 48],
            ['id_punkt_poczatek' => 1115,'id_punkt_koniec' => 300,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 48],

            ['id_punkt_poczatek' => 1116,'id_punkt_koniec' => 301,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 48],
            ['id_punkt_poczatek' => 1117,'id_punkt_koniec' => 301,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 48],
            ['id_punkt_poczatek' => 1118,'id_punkt_koniec' => 301,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 48],
            ['id_punkt_poczatek' => 1119,'id_punkt_koniec' => 301,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 48],

            //Pasmo 49
            ['id_punkt_poczatek' => 1120,'id_punkt_koniec' => 302,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 49],
            ['id_punkt_poczatek' => 1121,'id_punkt_koniec' => 302,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 49],
            ['id_punkt_poczatek' => 1122,'id_punkt_koniec' => 302,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 49],

            ['id_punkt_poczatek' => 1123,'id_punkt_koniec' => 303,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 49],
            ['id_punkt_poczatek' => 1124,'id_punkt_koniec' => 303,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 49],
            ['id_punkt_poczatek' => 1125,'id_punkt_koniec' => 303,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 49],
            ['id_punkt_poczatek' => 1126,'id_punkt_koniec' => 303,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 49],

            ['id_punkt_poczatek' => 1127,'id_punkt_koniec' => 304,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 49],
            ['id_punkt_poczatek' => 1128,'id_punkt_koniec' => 304,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 49],

            ['id_punkt_poczatek' => 1129,'id_punkt_koniec' => 305,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 49],
            ['id_punkt_poczatek' => 1130,'id_punkt_koniec' => 305,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 49],
            ['id_punkt_poczatek' => 1131,'id_punkt_koniec' => 305,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 49],

            ['id_punkt_poczatek' => 1132,'id_punkt_koniec' => 306,'punkty_do' => 7,'punkty_od' => 3,'id_pasma' => 49],
            ['id_punkt_poczatek' => 1133,'id_punkt_koniec' => 306,'punkty_do' => 0,'punkty_od' => 0,'id_pasma' => 49],
            ['id_punkt_poczatek' => 1134,'id_punkt_koniec' => 306,'punkty_do' => 8,'punkty_od' => 4,'id_pasma' => 49],
            ['id_punkt_poczatek' => 1135,'id_punkt_koniec' => 306,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 49],

            ['id_punkt_poczatek' => 1136,'id_punkt_koniec' => 307,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 49],
            ['id_punkt_poczatek' => 1137,'id_punkt_koniec' => 307,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 49],

            //Pasmo 50
            ['id_punkt_poczatek' => 1138,'id_punkt_koniec' => 308,'punkty_do' => 3,'punkty_od' => 4,'id_pasma' => 50],
            ['id_punkt_poczatek' => 1139,'id_punkt_koniec' => 308,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 50],
            ['id_punkt_poczatek' => 1140,'id_punkt_koniec' => 308,'punkty_do' => 8,'punkty_od' => 7,'id_pasma' => 50],

            ['id_punkt_poczatek' => 1141,'id_punkt_koniec' => 309,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 50],
            ['id_punkt_poczatek' => 1142,'id_punkt_koniec' => 309,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 50],
            ['id_punkt_poczatek' => 1143,'id_punkt_koniec' => 309,'punkty_do' => 5,'punkty_od' => 5,'id_pasma' => 50],
            ['id_punkt_poczatek' => 1144,'id_punkt_koniec' => 309,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 50],

            ['id_punkt_poczatek' => 1145,'id_punkt_koniec' => 310,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 50],
            ['id_punkt_poczatek' => 1146,'id_punkt_koniec' => 310,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 50],
            ['id_punkt_poczatek' => 1147,'id_punkt_koniec' => 310,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 50],
            ['id_punkt_poczatek' => 1148,'id_punkt_koniec' => 310,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 50],
            ['id_punkt_poczatek' => 1149,'id_punkt_koniec' => 310,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 50],

            ['id_punkt_poczatek' => 1150,'id_punkt_koniec' => 311,'punkty_do' => 8,'punkty_od' => 7,'id_pasma' => 50],
            ['id_punkt_poczatek' => 1151,'id_punkt_koniec' => 311,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 50],
            ['id_punkt_poczatek' => 1152,'id_punkt_koniec' => 311,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 50],
            ['id_punkt_poczatek' => 1153,'id_punkt_koniec' => 311,'punkty_do' => 11,'punkty_od' => 11,'id_pasma' => 50],

            //Pasmo 51
            ['id_punkt_poczatek' => 1154,'id_punkt_koniec' => 312,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 51],

            ['id_punkt_poczatek' => 1155,'id_punkt_koniec' => 313,'punkty_do' => 7,'punkty_od' => 8,'id_pasma' => 51],
            ['id_punkt_poczatek' => 1156,'id_punkt_koniec' => 313,'punkty_do' => 6,'punkty_od' => 7,'id_pasma' => 51],
            ['id_punkt_poczatek' => 1157,'id_punkt_koniec' => 313,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 51],

            ['id_punkt_poczatek' => 1158,'id_punkt_koniec' => 314,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 51],

            ['id_punkt_poczatek' => 1159,'id_punkt_koniec' => 315,'punkty_do' => 5,'punkty_od' => 7,'id_pasma' => 51],

            ['id_punkt_poczatek' => 1160,'id_punkt_koniec' => 316,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 51],
            ['id_punkt_poczatek' => 1161,'id_punkt_koniec' => 316,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 51],
            ['id_punkt_poczatek' => 1162,'id_punkt_koniec' => 316,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 51],
            ['id_punkt_poczatek' => 1163,'id_punkt_koniec' => 316,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 51],

            ['id_punkt_poczatek' => 1164,'id_punkt_koniec' => 317,'punkty_do' => 8,'punkty_od' => 6,'id_pasma' => 51],
            ['id_punkt_poczatek' => 1165,'id_punkt_koniec' => 317,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 51],
            ['id_punkt_poczatek' => 1166,'id_punkt_koniec' => 317,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 51],

            //Pasmo 52
            ['id_punkt_poczatek' => 1167,'id_punkt_koniec' => 318,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 52],
            ['id_punkt_poczatek' => 1168,'id_punkt_koniec' => 318,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 52],

            ['id_punkt_poczatek' => 1169,'id_punkt_koniec' => 319,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 52],
            ['id_punkt_poczatek' => 1170,'id_punkt_koniec' => 319,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 52],
            ['id_punkt_poczatek' => 1171,'id_punkt_koniec' => 319,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 52],

            ['id_punkt_poczatek' => 1172,'id_punkt_koniec' => 320,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 52],
            ['id_punkt_poczatek' => 1173,'id_punkt_koniec' => 320,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 52],
            ['id_punkt_poczatek' => 1174,'id_punkt_koniec' => 320,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 52],
            ['id_punkt_poczatek' => 1175,'id_punkt_koniec' => 320,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 52],

            ['id_punkt_poczatek' => 1176,'id_punkt_koniec' => 321,'punkty_do' => 5,'punkty_od' => 5,'id_pasma' => 52],
            ['id_punkt_poczatek' => 1177,'id_punkt_koniec' => 321,'punkty_do' => 11,'punkty_od' => 11,'id_pasma' => 52],

            ['id_punkt_poczatek' => 1178,'id_punkt_koniec' => 322,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 52],
            ['id_punkt_poczatek' => 1179,'id_punkt_koniec' => 322,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 52],
            ['id_punkt_poczatek' => 1180,'id_punkt_koniec' => 322,'punkty_do' => 8,'punkty_od' => 7,'id_pasma' => 52],
            ['id_punkt_poczatek' => 1181,'id_punkt_koniec' => 322,'punkty_do' => 9,'punkty_od' => 9,'id_pasma' => 52],
            ['id_punkt_poczatek' => 1182,'id_punkt_koniec' => 322,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 52],

            ['id_punkt_poczatek' => 1183,'id_punkt_koniec' => 323,'punkty_do' => 10,'punkty_od' => 8,'id_pasma' => 52],
            ['id_punkt_poczatek' => 1184,'id_punkt_koniec' => 323,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 52],
            ['id_punkt_poczatek' => 1185,'id_punkt_koniec' => 323,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 52],
            ['id_punkt_poczatek' => 1186,'id_punkt_koniec' => 323,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 52],
            ['id_punkt_poczatek' => 1187,'id_punkt_koniec' => 323,'punkty_do' => 7,'punkty_od' => 7,'id_pasma' => 52],
            ['id_punkt_poczatek' => 1188,'id_punkt_koniec' => 323,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 52],

            //Pasmo 53
            ['id_punkt_poczatek' => 1189,'id_punkt_koniec' => 324,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 53],
            ['id_punkt_poczatek' => 1190,'id_punkt_koniec' => 324,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 53],

            ['id_punkt_poczatek' => 1191,'id_punkt_koniec' => 325,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 53],
            ['id_punkt_poczatek' => 1192,'id_punkt_koniec' => 325,'punkty_do' => 4,'punkty_od' => 6,'id_pasma' => 53],
            ['id_punkt_poczatek' => 1193,'id_punkt_koniec' => 325,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 53],

            ['id_punkt_poczatek' => 1194,'id_punkt_koniec' => 326,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 53],
            ['id_punkt_poczatek' => 1195,'id_punkt_koniec' => 326,'punkty_do' => 3,'punkty_od' => 5,'id_pasma' => 53],
            ['id_punkt_poczatek' => 1196,'id_punkt_koniec' => 326,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 53],

            ['id_punkt_poczatek' => 1197,'id_punkt_koniec' => 327,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 53],
            ['id_punkt_poczatek' => 1198,'id_punkt_koniec' => 327,'punkty_do' => 3,'punkty_od' => 5,'id_pasma' => 53],
            ['id_punkt_poczatek' => 1199,'id_punkt_koniec' => 327,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 53],
            ['id_punkt_poczatek' => 1200,'id_punkt_koniec' => 327,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 53],

            ['id_punkt_poczatek' => 1201,'id_punkt_koniec' => 328,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 53],
            ['id_punkt_poczatek' => 1202,'id_punkt_koniec' => 328,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 53],
            ['id_punkt_poczatek' => 1203,'id_punkt_koniec' => 328,'punkty_do' => 2,'punkty_od' => 4,'id_pasma' => 53],
            ['id_punkt_poczatek' => 1204,'id_punkt_koniec' => 328,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 53],
            ['id_punkt_poczatek' => 1205,'id_punkt_koniec' => 328,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 53],
            ['id_punkt_poczatek' => 1206,'id_punkt_koniec' => 328,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 53],
            ['id_punkt_poczatek' => 1207,'id_punkt_koniec' => 328,'punkty_do' => 7,'punkty_od' => 4,'id_pasma' => 53],
            ['id_punkt_poczatek' => 1208,'id_punkt_koniec' => 328,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 53],
            ['id_punkt_poczatek' => 1209,'id_punkt_koniec' => 328,'punkty_do' => 4,'punkty_od' => 0,'id_pasma' => 53],

            ['id_punkt_poczatek' => 1210,'id_punkt_koniec' => 329,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 53],
            ['id_punkt_poczatek' => 1211,'id_punkt_koniec' => 329,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 53],
            ['id_punkt_poczatek' => 1212,'id_punkt_koniec' => 329,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 53],

            //Pasmo 54
            ['id_punkt_poczatek' => 1213,'id_punkt_koniec' => 330,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 54],

            ['id_punkt_poczatek' => 1214,'id_punkt_koniec' => 331,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 54],
            ['id_punkt_poczatek' => 1215,'id_punkt_koniec' => 331,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 54],
            ['id_punkt_poczatek' => 1216,'id_punkt_koniec' => 331,'punkty_do' => 2,'punkty_od' => 2,'id_pasma' => 54],

            ['id_punkt_poczatek' => 1217,'id_punkt_koniec' => 332,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 54],

            ['id_punkt_poczatek' => 1218,'id_punkt_koniec' => 333,'punkty_do' => 11,'punkty_od' => 4,'id_pasma' => 54],
            ['id_punkt_poczatek' => 1219,'id_punkt_koniec' => 333,'punkty_do' => 11,'punkty_od' => 4,'id_pasma' => 54],
            ['id_punkt_poczatek' => 1220,'id_punkt_koniec' => 333,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 54],
            ['id_punkt_poczatek' => 1221,'id_punkt_koniec' => 333,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 54],

            ['id_punkt_poczatek' => 1222,'id_punkt_koniec' => 334,'punkty_do' => 7,'punkty_od' => 2,'id_pasma' => 54],

            ['id_punkt_poczatek' => 1223,'id_punkt_koniec' => 335,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 54],

            //Pasmo 55
            ['id_punkt_poczatek' => 1224,'id_punkt_koniec' => 336,'punkty_do' => 7,'punkty_od' => 3,'id_pasma' => 55],
            ['id_punkt_poczatek' => 1225,'id_punkt_koniec' => 336,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 55],

            ['id_punkt_poczatek' => 1226,'id_punkt_koniec' => 337,'punkty_do' => 7,'punkty_od' => 3,'id_pasma' => 55],
            ['id_punkt_poczatek' => 1227,'id_punkt_koniec' => 337,'punkty_do' => 5,'punkty_od' => 2,'id_pasma' => 55],

            ['id_punkt_poczatek' => 1228,'id_punkt_koniec' => 338,'punkty_do' => 5,'punkty_od' => 2,'id_pasma' => 55],
            ['id_punkt_poczatek' => 1229,'id_punkt_koniec' => 338,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 55],

            ['id_punkt_poczatek' => 1230,'id_punkt_koniec' => 339,'punkty_do' => 5,'punkty_od' => 2,'id_pasma' => 55],
            ['id_punkt_poczatek' => 1231,'id_punkt_koniec' => 339,'punkty_do' => 9,'punkty_od' => 4,'id_pasma' => 55],
            ['id_punkt_poczatek' => 1232,'id_punkt_koniec' => 339,'punkty_do' => 10,'punkty_od' => 5,'id_pasma' => 55],
            ['id_punkt_poczatek' => 1233,'id_punkt_koniec' => 339,'punkty_do' => 6,'punkty_od' => 3,'id_pasma' => 55],

            ['id_punkt_poczatek' => 1234,'id_punkt_koniec' => 340,'punkty_do' => 7,'punkty_od' => 2,'id_pasma' => 55],
            ['id_punkt_poczatek' => 1235,'id_punkt_koniec' => 340,'punkty_do' => 13,'punkty_od' => 4,'id_pasma' => 55],
            ['id_punkt_poczatek' => 1236,'id_punkt_koniec' => 340,'punkty_do' => 18,'punkty_od' => 8,'id_pasma' => 55],
            ['id_punkt_poczatek' => 1237,'id_punkt_koniec' => 340,'punkty_do' => 19,'punkty_od' => 9,'id_pasma' => 55],
            ['id_punkt_poczatek' => 1238,'id_punkt_koniec' => 340,'punkty_do' => 16,'punkty_od' => 7,'id_pasma' => 55],
            ['id_punkt_poczatek' => 1239,'id_punkt_koniec' => 340,'punkty_do' => 18,'punkty_od' => 9,'id_pasma' => 55],

            ['id_punkt_poczatek' => 1240,'id_punkt_koniec' => 341,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 55],
            ['id_punkt_poczatek' => 1241,'id_punkt_koniec' => 341,'punkty_do' => 5,'punkty_od' => 4,'id_pasma' => 55],
            ['id_punkt_poczatek' => 1242,'id_punkt_koniec' => 341,'punkty_do' => 20,'punkty_od' => 10,'id_pasma' => 55],
            ['id_punkt_poczatek' => 1243,'id_punkt_koniec' => 341,'punkty_do' => 20,'punkty_od' => 10,'id_pasma' => 55],
            ['id_punkt_poczatek' => 1244,'id_punkt_koniec' => 341,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 55],

            //Pasmo 56
            ['id_punkt_poczatek' => 1245,'id_punkt_koniec' => 342,'punkty_do' => 15,'punkty_od' => 8,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1246,'id_punkt_koniec' => 342,'punkty_do' => 10,'punkty_od' => 3,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1247,'id_punkt_koniec' => 342,'punkty_do' => 8,'punkty_od' => 4,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1248,'id_punkt_koniec' => 342,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1249,'id_punkt_koniec' => 342,'punkty_do' => 1,'punkty_od' => 2,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1250,'id_punkt_koniec' => 342,'punkty_do' => 18,'punkty_od' => 18,'id_pasma' => 56],

            ['id_punkt_poczatek' => 1251,'id_punkt_koniec' => 343,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1252,'id_punkt_koniec' => 343,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1253,'id_punkt_koniec' => 343,'punkty_do' => 3,'punkty_od' => 6,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1254,'id_punkt_koniec' => 343,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1255,'id_punkt_koniec' => 343,'punkty_do' => 10,'punkty_od' => 4,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1256,'id_punkt_koniec' => 343,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 56],

            ['id_punkt_poczatek' => 1257,'id_punkt_koniec' => 344,'punkty_do' => 4,'punkty_od' => 3,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1258,'id_punkt_koniec' => 344,'punkty_do' => 3,'punkty_od' => 8,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1259,'id_punkt_koniec' => 344,'punkty_do' => 4,'punkty_od' => 8,'id_pasma' => 56],

            ['id_punkt_poczatek' => 1260,'id_punkt_koniec' => 345,'punkty_do' => 12,'punkty_od' => 4,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1261,'id_punkt_koniec' => 345,'punkty_do' => 18,'punkty_od' => 9,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1262,'id_punkt_koniec' => 345,'punkty_do' => 16,'punkty_od' => 8,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1263,'id_punkt_koniec' => 345,'punkty_do' => 11,'punkty_od' => 8,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1264,'id_punkt_koniec' => 345,'punkty_do' => 6,'punkty_od' => 5,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1265,'id_punkt_koniec' => 345,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1266,'id_punkt_koniec' => 345,'punkty_do' => 10,'punkty_od' => 6,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1267,'id_punkt_koniec' => 345,'punkty_do' => 7,'punkty_od' => 3,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1268,'id_punkt_koniec' => 345,'punkty_do' => 11,'punkty_od' => 6,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1270,'id_punkt_koniec' => 345,'punkty_do' => 12,'punkty_od' => 2,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1271,'id_punkt_koniec' => 345,'punkty_do' => 8,'punkty_od' => 3,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1272,'id_punkt_koniec' => 345,'punkty_do' => 7,'punkty_od' => 2,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1273,'id_punkt_koniec' => 345,'punkty_do' => 5,'punkty_od' => 2,'id_pasma' => 56],
            ['id_punkt_poczatek' => 1274,'id_punkt_koniec' => 345,'punkty_do' => 9,'punkty_od' => 5,'id_pasma' => 56],

            //Pasmo 57
            ['id_punkt_poczatek' => 1275,'id_punkt_koniec' => 346,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 57],
            ['id_punkt_poczatek' => 1276,'id_punkt_koniec' => 346,'punkty_do' => 5,'punkty_od' => 2,'id_pasma' => 57],
            ['id_punkt_poczatek' => 1277,'id_punkt_koniec' => 346,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 57],
            ['id_punkt_poczatek' => 1278,'id_punkt_koniec' => 346,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 57],
            ['id_punkt_poczatek' => 1279,'id_punkt_koniec' => 346,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 57],
            ['id_punkt_poczatek' => 1280,'id_punkt_koniec' => 346,'punkty_do' => 13,'punkty_od' => 8,'id_pasma' => 57],

            ['id_punkt_poczatek' => 1281,'id_punkt_koniec' => 347,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 57],
            ['id_punkt_poczatek' => 1282,'id_punkt_koniec' => 347,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 57],

            ['id_punkt_poczatek' => 1283,'id_punkt_koniec' => 348,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 57],
            ['id_punkt_poczatek' => 1284,'id_punkt_koniec' => 348,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 57],

            ['id_punkt_poczatek' => 1285,'id_punkt_koniec' => 349,'punkty_do' => 8,'punkty_od' => 8,'id_pasma' => 57],
            ['id_punkt_poczatek' => 1286,'id_punkt_koniec' => 349,'punkty_do' => 14,'punkty_od' => 8,'id_pasma' => 57],

            //Pasmo 58
            ['id_punkt_poczatek' => 1287,'id_punkt_koniec' => 350,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 58],
            ['id_punkt_poczatek' => 1288,'id_punkt_koniec' => 350,'punkty_do' => 6,'punkty_od' => 6,'id_pasma' => 58],
            ['id_punkt_poczatek' => 1289,'id_punkt_koniec' => 350,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 58],

            ['id_punkt_poczatek' => 1290,'id_punkt_koniec' => 351,'punkty_do' => 8,'punkty_od' => 5,'id_pasma' => 58],
            ['id_punkt_poczatek' => 1291,'id_punkt_koniec' => 351,'punkty_do' => 7,'punkty_od' => 6,'id_pasma' => 58],

            ['id_punkt_poczatek' => 1292,'id_punkt_koniec' => 352,'punkty_do' => 6,'punkty_od' => 4,'id_pasma' => 58],

            ['id_punkt_poczatek' => 1293,'id_punkt_koniec' => 353,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 58],
            ['id_punkt_poczatek' => 1294,'id_punkt_koniec' => 353,'punkty_do' => 12,'punkty_od' => 9,'id_pasma' => 58],

            ['id_punkt_poczatek' => 1295,'id_punkt_koniec' => 354,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 58],

            ['id_punkt_poczatek' => 1296,'id_punkt_koniec' => 355,'punkty_do' => 5,'punkty_od' => 3,'id_pasma' => 58],
            ['id_punkt_poczatek' => 1297,'id_punkt_koniec' => 355,'punkty_do' => 7,'punkty_od' => 5,'id_pasma' => 58],

            //Pasmo 59
            ['id_punkt_poczatek' => 1298,'id_punkt_koniec' => 356,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 59],
            ['id_punkt_poczatek' => 1299,'id_punkt_koniec' => 356,'punkty_do' => 3,'punkty_od' => 3,'id_pasma' => 59],
            ['id_punkt_poczatek' => 1300,'id_punkt_koniec' => 356,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 59],
            ['id_punkt_poczatek' => 1301,'id_punkt_koniec' => 356,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 59],
            ['id_punkt_poczatek' => 1302,'id_punkt_koniec' => 356,'punkty_do' => 4,'punkty_od' => 4,'id_pasma' => 59],
            ['id_punkt_poczatek' => 1303,'id_punkt_koniec' => 356,'punkty_do' => 8,'punkty_od' => 8,'id_pasma' => 59],

            ['id_punkt_poczatek' => 1304,'id_punkt_koniec' => 357,'punkty_do' => 4,'punkty_od' => 5,'id_pasma' => 59],
            ['id_punkt_poczatek' => 1305,'id_punkt_koniec' => 357,'punkty_do' => 2,'punkty_od' => 3,'id_pasma' => 59],

            ['id_punkt_poczatek' => 1306,'id_punkt_koniec' => 358,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 59],
            ['id_punkt_poczatek' => 1307,'id_punkt_koniec' => 358,'punkty_do' => 3,'punkty_od' => 1,'id_pasma' => 59],
            ['id_punkt_poczatek' => 1308,'id_punkt_koniec' => 358,'punkty_do' => 3,'punkty_od' => 2,'id_pasma' => 59],

            ['id_punkt_poczatek' => 1309,'id_punkt_koniec' => 359,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 59],
            ['id_punkt_poczatek' => 1310,'id_punkt_koniec' => 359,'punkty_do' => 1,'punkty_od' => 1,'id_pasma' => 59],
            ['id_punkt_poczatek' => 1311,'id_punkt_koniec' => 359,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 59],
            ['id_punkt_poczatek' => 1312,'id_punkt_koniec' => 359,'punkty_do' => 2,'punkty_od' => 1,'id_pasma' => 59],
            ['id_punkt_poczatek' => 1313,'id_punkt_koniec' => 359,'punkty_do' => 4,'punkty_od' => 2,'id_pasma' => 59],

        ];
        DB::table('odcinek')->insert($dane);
    }
}
