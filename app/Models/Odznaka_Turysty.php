<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odznaka_Turysty extends Model
{
    use HasFactory;    
    protected $table = 'odznaka_turysty';
    protected $fillable = 
    [
        'id_turysty',
        'id_odznaki'
    ]; 
    public function odznakaturysty()
    {
        return $this->belongsTo('app\Models\Turysta');        
    }
    public function odznakaturysty_odznaka()
    {
        return $this->hasMany('app\Models\Odznaka');
    }
}
