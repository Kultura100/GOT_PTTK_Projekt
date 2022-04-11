<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wycieczka extends Model{
    
    use HasFactory;    
    protected $table = 'wycieczka';
    protected $fillable = 
    [
        'id_turysty',
        'id_tworcy',
        'dataod',
        'datado',
        'punkty'
    ]; 
    public function wycieczkaturysta()
    {
        return $this->hasMany('app\Models\Turysta');        
    }

    public function wycieczkazdjecia()
    {
        return $this->hasMany('app\Models\Zdjecia');
    }

    public function wieleodcinkow(){
        return $this->hasMany(Wycieczka_odcinek::class,'id_wycieczka','id');
    }

    public function uzytkownikWycieczka(){
        return $this->belongsTo(User::class,'id_tworcy', 'id');
    }
    
    public function dajImie(){
        return $this->belongsTo(User::class);
    }
}
