<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ksiazeczka extends Model
{
    public $timestamps = false;
    protected $table = 'ksiazeczka';
    use HasFactory;
}
