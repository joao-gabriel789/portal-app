<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $fillabe = ['logradouro', 'cep','id_cidade'];

    //filho
    public function cidade(){
        return $this->belongsTo(Cidade::class, 'id_cidade');
    }
    //pai
    public function negocio() {
        return $this->hasMany(Negocio::class);
    }
    public function pontoTuristico() {
        return $this->hasMany(PontoTuristico::class);
    }
}
