<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\CadernoController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\NegocioController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PontoTuristicoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TipoNegocioController;
use App\Http\Controllers\TipoPontoTuristicoController;
use App\Models\PontoTuristico;
use App\Models\TipoPontoTuristico;
use Illuminate\Support\Facades\Route;

Route::get('/',[SiteController::class,'admin'])->name('site.admin');


//Get: requisição via url
//post: requisição via cabecalho da request
//update: requição via url e cabecalho
//delete: serve para destruir objeto
//delete ou softdelete: quando eu quero apenas ocultar eu uso o segundo, tem que configurar migration e model.

//Route::get('/cadernos',[CadernoController::class,'index'])->name('cadernos.index');

//Route::get('/cadernos/create',[CadernoController::class,'create'])->name('cadernos.create');

//Route::post('/cadernos',[CadernoController::class,'store'])->name('cadernos.store');

//Route::get('/cadernos/{caderno}',[CadernoController::class,'edit'])->name('cadernos.edit');

//Route::put('/cadernos/{caderno}',[CadernoController::class,'update'])->name('cadernos.update');

//Route::delete('/cadernos/{caderno}',[CadernoController::class,'destroy'])->name('cadernos.destroy');
//
Route::group(['prefix' => 'admin'], function() {
    Route::resource('/admin/cadernos', CadernoController::class);
    Route::resource('/admin/autores', AutorController::class);
    Route::resource('/admin/noticias', NoticiaController::class);
    Route::resource('/admin/negocios', NegocioController::class);
    Route::resource('/admin/cidades', CidadeController::class);
    Route::resource('/admin/enderecos', EnderecoController::class);
    Route::resource('/admin/estados', EstadoController::class);
    Route::resource('/admin/pontosTuristicos', PontoTuristicoController::class);
    Route::resource('/admin/tipoNegocio', TipoNegocioController::class);
    Route::resource('/admin/tipoPontoTuristico', TipoPontoTuristicoController::class);

});


