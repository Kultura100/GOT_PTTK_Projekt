<?php

namespace App\Models;

use App\Models\Pasmo;
use App\Models\Punkt;
use App\Models\Podpunkt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Odcinek extends Model
{
    use HasFactory;    
    public $timestamps = false;
    protected $table = 'odcinek';
    protected $fillable = 
    [
        'id_punkt_poczatek',
        'id_punkt_koniec',
        'punkty_od',
        'punkty_do',
        'otwarty'
    ]; 
    public function punktpocz()
    {
        return $this->hasOne(Podpunkt::class,'id','id_punkt_poczatek');        
    }

    public function punktkoncz()
    {
        return $this->hasOne(Punkt::class,'id','id_punkt_koniec');        
    }
    public function wycieczkaodcinek()
    {
        return $this->hasMany('app\Models\Wycieczka_odcinek');        
    }

    public function pasmo()
    {
        return $this->hasOne(Pasmo::class,'id','id_pasma');
    }
}
