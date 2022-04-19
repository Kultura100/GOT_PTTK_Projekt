<?php

namespace App\Models;

use App\Models\Podpunkt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Punkt extends Model
{
    use HasFactory;    
    protected $table = 'punkt';
    protected $fillable = 
    [
        'nazwa'
    ]; 
    public function dajpunkty($punktid, $podpunktid)
    {
        $odcinek = Odcinek::where([['id_punkt_poczatek',$punktid],['id_punkt_koniec',$podpunktid]])->get();
        return $odcinek->first()->punkty_od."/".$odcinek->first()->punkty_do;
    }

    public function punktnaliscie()
    {
        return $this->hasMany(Podpunkt::class,'id_punkt','id');        
    }
}
