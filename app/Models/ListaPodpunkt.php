<?php

namespace App\Models;

use App\Models\Punkt;
use App\Models\Podpunkt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListaPodpunkt extends Model
{
    use HasFactory;    
    protected $table = 'listapodpunkt';
    public $timestamps = false;
    protected $fillable = 
    [
        'id_punkt',
        'id_podpunkt',
    ]; 

    public function punkty()
    {
        return $this->hasMany(Punkt::class,'id','id_punkt');
    }

    public function podpunkty()
    {
        return $this->hasMany(Podpunkt::class,'id','id_podpunkt');
    }
}
