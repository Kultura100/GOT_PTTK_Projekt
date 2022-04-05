<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zdjecia extends Model
{
    use HasFactory;    
    protected $table = 'wycieczka_zdjecia';
    protected $fillable = 
    [
        'id_wycieczka',
        'zrodlo_zdjecia',
        'opis'
    ]; 
    public function zdjecia()
    {
        return $this->belongsTo('app\Models\Wycieczka');        
    }
}
