<?php

namespace App\Models;

use App\Models\ListaPodpunkt;
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
    public function punkt()
    {
        return $this->belongsTo('app\Models\Odcinek');        
    }

    public function punktnaliscie()
    {
        return $this->hasMany(ListaPodpunkt::class,'id_punkt','id');        
    }
}
