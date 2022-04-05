<?php

namespace App\Models;

use App\Models\Pasmo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Odcinek extends Model
{
    use HasFactory;    
    protected $table = 'odcinek';
    protected $fillable = 
    [
        'id_punkt_poczatek',
        'id_punkt_koniec',
        'punkty_od',
        'punkty_do',
        'otwarty'
    ]; 
    public function odcinek()
    {
        return $this->hasMany('app\Models\Punkt');        
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
