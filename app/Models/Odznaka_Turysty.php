<?php

namespace App\Models;

use App\Models\Odznaka;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Odznaka_Turysty extends Model
{
    use HasFactory;    
    protected $table = 'odznaka_turysty';
    protected $guarded = []; 
    public function odznakaturysty()
    {
        return $this->belongsToMany(User::class);        
    }
    public function odznakaturysty_odznaka()
    {
        return $this->hasMany(Odznaka::class,'id','id_odznaki');
    }
}
