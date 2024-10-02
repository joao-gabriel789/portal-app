<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    //criação em massa e evita colocar dados diferentes no banco
    protected $fillabe = ['nome', 'contato'];
    //quando eu alterei o nome do meu banco no migrations
    protected $table = 'autores';
    //explorar relacionamento com noticias
    public function noticias() {
        return $this->hasMany(Noticia::class);
    }
    //relacionamentos

}
