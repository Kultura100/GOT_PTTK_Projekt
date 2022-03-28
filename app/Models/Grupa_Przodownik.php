<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupa_Przodownik extends Model
{
    use HasFactory;    
    protected $table = 'grupa_przodownik';
    protected $fillable = 
    [
        'id_przodownik',
        'id_grupa'
    ]; 
    public function grupaprzodownik()
    {
        return $this->hasOne('app\Models\Grupa');        
    }
}
