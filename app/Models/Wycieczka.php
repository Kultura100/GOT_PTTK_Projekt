<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wycieczka extends Model{
    
    use HasFactory;    
    protected $table = 'wycieczka';
    protected $fillable = 
    [
        'id_turysty',
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
}
