<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PontoTuristico extends Model
{
    use HasFactory;
    protected $fillable = ['nome','imagem','longitude_latitude','descricao','como_chegar','ativo','id_tipo_ponto_turistico','id_endereco'];

    public function tipoPontoTuristico(){
        return $this->belongsTo(TipoPontoTuristico::class, 'id_tipo_ponto_turisticos');
    }
    public function endereco(){
        return $this->belongsTo(Endereco::class, 'id_endereco');
    }
}
