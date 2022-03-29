<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
