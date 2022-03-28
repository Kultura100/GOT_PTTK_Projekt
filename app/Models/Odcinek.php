<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
