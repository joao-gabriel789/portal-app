<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = ['data','titulo','subtitulo','texto','id_autor','id_caderno'];

    public function autor(){
        return $this->belongsTo(Autor::class, 'id_autor');
    }
    public function caderno(){
        return $this->belongsTo(Caderno::class, 'id_caderno');
    }

}
