<?php

namespace App\Models;

use App\Models\Pasmo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grupa extends Model
{
    use HasFactory;    
    protected $table = 'grupa';
    protected $fillable = 
    [
        'nazwa'        
    ]; 
    public function pasma()
    {
        return $this->hasMany(Pasmo::class,'id_grupa');        
    }
    public function grupaprzodownik()
    {
        return $this->belongsTo('app\Models\Przodownik');
    }

}
