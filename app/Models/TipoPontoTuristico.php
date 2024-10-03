<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPontoTuristico extends Model
{
    use HasFactory;
    protected $fillabe = ['tipo'];

    public function pontoTuristico() {
        return $this->hasMany(PontoTuristico::class);
    }
}
