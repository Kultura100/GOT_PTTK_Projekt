<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListaPodPunktSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $licznik = 1;
            for ($j=1; $j <= 61 || $licznik <= 25 ; $j++) 
            { 
                if($j == 5) {$licznik++;}
                elseif ($j == 7){$licznik++;}
                elseif ($j == 9){$licznik++;}
                elseif ($j == 13){$licznik++;}
                elseif ($j == 15){$licznik++;}
                elseif ($j == 18){$licznik++;}
                elseif ($j == 20){$licznik++;}
                elseif ($j == 23){$licznik++;}
                elseif ($j == 25){$licznik++;}
                elseif ($j == 28){$licznik++;}
                elseif ($j == 31){$licznik++;}
                elseif ($j == 33){$licznik++;}
                elseif ($j == 35){$licznik++;}
                elseif ($j == 38){$licznik++;}
                elseif ($j == 40){$licznik++;}
                elseif ($j == 42){$licznik++;}
                elseif ($j == 44){$licznik++;}
                elseif ($j == 46){$licznik++;}
                elseif ($j == 48){$licznik++;}
                elseif ($j == 51){$licznik++;}
                elseif ($j == 54){$licznik++;}
                elseif ($j == 57){$licznik++;}
                elseif ($j == 60){$licznik++;}
                if($j == 62) break;
                DB::table('listapodpunkt')->insert([
                    'id_punkt' => $licznik,
                    'id_podpunkt' => $j,
                ]);  
            }
    }
}
