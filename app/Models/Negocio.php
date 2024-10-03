<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    use HasFactory;
    protected $fillabe = ['nomenomeFantasia', 'contato','latitude_longitude','descricao','ativo','id_tipo_negocio','id_endereco'];

    public function tipoNegocio(){
        return $this->belongsTo(TipoNegocio::class, 'id_tipo_negocios');
    }
    public function endereco(){
        return $this->belongsTo(Endereco::class, 'id_endereco');
    }
}
