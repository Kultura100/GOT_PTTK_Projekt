<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;    
    protected $table = 'status';
    protected $fillable = 
    [
        'nazwa'
    ]; 
    public function wycieczkaturysta()
    {
        return $this->belongsTo('app\Models\Wycieczka_odcinek');        
    }
}
