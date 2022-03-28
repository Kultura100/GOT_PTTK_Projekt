<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odznaka extends Model
{
    use HasFactory;    
    protected $table = 'odznaka';
    protected $fillable = 
    [
        'nazwa',
        'wymagane_punkty'
    ]; 
    public function wycieczkaturysta()
    {
        return $this->belongsToMany('app\Models\Odznaka_Turysty');        
    }
}
