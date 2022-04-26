<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Powiadomienie extends Model
{
    use HasFactory;    
    protected $table = 'powiadomienie';
    protected $fillable = 
    [
        'tekst'
    ]; 
}
