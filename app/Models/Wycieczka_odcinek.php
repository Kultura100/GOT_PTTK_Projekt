<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wycieczka_odcinek extends Model
{
    use HasFactory;    
    protected $table = 'wycieczka_odcinek';
    protected $fillable = 
    [
        'id_wycieczka',
        'id_odcinek',
        'data',
        'id_status',
        'liczba_punktow'
    ]; 
    public function wycieczka_odcinek()
    {
        return $this->belongsTo('app\Models\Wycieczka');        
    }
    public function wycieczka_odcinek()
    {
        return $this->belongsTo('app\Models\Odcinek');        
    }
    public function wycieczka_odcinek()
    {
        return $this->hasOne('app\Models\Status');        
    }
}
