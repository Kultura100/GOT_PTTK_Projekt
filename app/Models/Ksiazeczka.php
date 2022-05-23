<?php

namespace App\Models;

use App\Models\Ksiazeczka_wycieczka;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ksiazeczka extends Model
{
    public $timestamps = false;
    protected $table = 'ksiazeczka';
    protected $fillable = ['id_turysty'];
    use HasFactory;

    public function ksiazeczkawycieczki()
    {
        return $this->hasMany(Ksiazeczka_wycieczka::class, 'id_ksiazeczki', 'id');        
    }
    public function jakiUser()
    {
        return $this->hasOne(User::class, 'id', 'id_turysty');        
    }
}
