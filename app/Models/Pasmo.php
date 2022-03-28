<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasmo extends Model
{
    use HasFactory;    
    protected $table = 'pasmo';
    protected $fillable = 
    [
        'nazwa',
        'id_grupa'
    ]; 
    public function pasmo()
    {
        return $this->hasMany('app\Models\Odcinek');        
    }
}
