<?php

namespace App\Models;

use App\Models\Pasmo;
use App\Models\Odcinek;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wycieczka_odcinek extends Model
{
    use HasFactory;  
    public $timestamps = false;  
    protected $table = 'wycieczka_odcinek';
    protected $fillable = 
    [
        'id_wycieczka',
        'odwrocony',
        'id_odcinek',
        'data',
        'id_status',
        'liczba_punktow',
    ]; 
    public function wycieczka_odcinek()
    {
        return $this->belongsTo('app\Models\Wycieczka');        
    }
    public function wycieczka_odcinek2()
    {
        return $this->hasOne(Odcinek::class,'id','id_odcinek');        
    }
    public function status()
    {
        return $this->hasOne(Status::class,'id','id_status');        
    }
}
