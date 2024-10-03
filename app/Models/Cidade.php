<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;
    protected $fillabe = ['nome','id_estado'];

    public function estado(){
        return $this->belongsTo(Estado::class, 'id_estado');
    }
    public function endereco() {
        return $this->hasMany(Endereco::class);
    }
}
