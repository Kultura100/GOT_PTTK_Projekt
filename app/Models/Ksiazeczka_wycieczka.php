<?php

namespace App\Models;

use App\Models\Wycieczka;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ksiazeczka_wycieczka extends Model
{
    public $timestamps = false;
    protected $table = 'ksiazeczka_wycieczka';
    use HasFactory;

    protected $fillable = 
    [
        'id_ksiazeczki',
        'id_wycieczki',
        'zatwierdzona'        
    ]; 
    public function jakawycieczka()
    {
        return $this->hasOne(Wycieczka::class, 'id', 'id_wycieczki');        
    }
}