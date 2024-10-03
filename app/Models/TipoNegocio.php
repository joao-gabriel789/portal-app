<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoNegocio extends Model
{
    use HasFactory;
    protected $fillabe = ['tipo'];

    public function negocio() {
        return $this->hasMany(Negocio::class);
    }
}
