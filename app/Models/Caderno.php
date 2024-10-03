<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caderno extends Model
{
    use HasFactory;

    protected $fillabe = ['nome'];
    
    public function noticias() {
        return $this->hasMany(Noticia::class);
    }
}
