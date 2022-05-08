<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ksiazeczka_wycieczka extends Model
{
    public $timestamps = false;
    protected $table = 'ksiazeczka_wycieczka';
    use HasFactory;
}
