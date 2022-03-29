<?php

namespace App\Models;

use App\Models\Pasmo;
use App\Models\Odcinek;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    public function wycieczka_odcinek2()
    {
        return $this->hasOne(Odcinek::class,'id','id_odcinek');        
    }
    public function wycieczka_odcinek3()
    {
        return $this->hasOne('app\Models\Status');        
    }
}
