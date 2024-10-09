<?php


use App\Http\Controllers\CadernoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/faker', function () {
    dd(PontoTuristico::factory()->create());
    return view('welcome');
});

//Get: requisição via url
//post: requisição via cabecalho da request
//update: requição via url e cabecalho
//delete: serve para destruir objeto
//delete ou softdelete: quando eu quero apenas ocultar eu uso o segundo, tem que configurar migration e model.

Route::get('/cadernos',[CadernoController::class,'index'])->name('cadernos.index');

Route::get('/cadernos/create',[CadernoController::class,'create'])->name('cadernos.create');

Route::post('/cadernos',[CadernoController::class,'store'])->name('cadernos.store');

Route::get('/cadernos/{caderno}',[CadernoController::class,'edit'])->name('cadernos.edit');

Route::put('/cadernos/{caderno}',[CadernoController::class,'update'])->name('cadernos.update');

Route::delete('/cadernos/{caderno}',[CadernoController::class,'destroy'])->name('cadernos.destroy');
//