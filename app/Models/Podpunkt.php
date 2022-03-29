<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podpunkt extends Model
{
    use HasFactory;    
    protected $table = 'podpunkt';
    protected $fillable = 
    [
        'nazwa'
    ]; 
}
