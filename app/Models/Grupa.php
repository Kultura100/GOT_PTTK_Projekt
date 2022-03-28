<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupa extends Model
{
    use HasFactory;    
    protected $table = 'grupa';
    protected $fillable = 
    [
        'nazwa'        
    ]; 
    public function grupa()
    {
        return $this->hasMany('app\Models\Pasmo');        
    }
    public function grupaprzodownik()
    {
        return $this->belongsTo('app\Models\Przodownik');
    }

}
