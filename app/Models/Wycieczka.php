<?php

namespace App\Models;

use DateTime;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wycieczka extends Model{
    
    use HasFactory;    
    protected $table = 'wycieczka';
    protected $fillable = 
    [
        'nazwa',
        'id_turysty',
        'id_tworcy',
        'dataod',
        'datado',
        'punkty'
    ]; 
    public function wycieczkaturysta()
    {
        return $this->hasMany('app\Models\Turysta');        
    }

    public function wycieczkazdjecia()
    {
        return $this->hasMany('app\Models\Zdjecia');
    }

    public function wieleodcinkow(){
        return $this->hasMany(Wycieczka_odcinek::class,'id_wycieczka','id');
    }

    public function DajStatus(){
        $statusy = Wycieczka::wieleodcinkow()->get();
        foreach ($statusy as $value) {
            if($value->id_status == 2){
                return false;
            }else return true;
        }
    }

    public function sprawdzstatus($id){
        $wycieczka = Wycieczka::find($id);
        $dzisiaj = new DateTime();
        $dataod = new DateTime($wycieczka->dataod);
        $datado = new DateTime($wycieczka->datado);
        if(($dzisiaj >= $dataod) && ($dzisiaj <= $datado)){
            return "Możliwość dołączenia do wycieczki";
        }
        else return "Wycieczka już się odbyła";
    }

    public function ilepunktow($id){
        $licznik =0;
        $wycieczka = Wycieczka::find($id);
        foreach ($wycieczka->wieleodcinkow as $value) {
        $licznik += $value->liczba_punktow;
        }
        return $licznik;
    }

    public function uzytkownikWycieczka(){
        return $this->belongsTo(User::class,'id_tworcy', 'id');
    }
    
    public function dajImie(){
        return $this->belongsTo(User::class);
    }
}
