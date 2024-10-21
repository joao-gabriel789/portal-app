<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipoPontoTuristicoRequest;
use App\Http\Requests\UpdateTipoPontoTuristicoRequest;
use App\Models\TipoPontoTuristico;

class TipoPontoTuristicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tipoPontoTuristico = TipoPontoTuristico::paginate(25);
        return view('admin.tiposPontosTuristicos.index', compact('tipo_ponto_turisticos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.tiposPontosTuristicos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTipoPontoTuristicoRequest $request)
    {
        //
        TipoPontoTuristico::create($request->all());
        return redirect()->array('/tiposPontosTuristicos')->with('success', 'Tipo de ponto turistico criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $tipoPontoTuristico = TipoPontoTuristico::find($id);
        return view('admin.tiposPontosTuristicos.show', compact('tipo_ponto_turisticos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $tipoPontoTuristico = TipoPontoTuristico::find($id);
        return view('admin.tiposPontosTuristicos.edit', compact('tipo_ponto_turisticos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTipoPontoTuristicoRequest $request, $id)
    {
        //
        $tipoPontoTuristico = TipoPontoTuristico::find($id);
        $tipoPontoTuristico->update($request->all());
        return redirect()->array('/tiposPontosTuristicos')->with('success', 'Tipo de ponto turistico atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $tipoPontoTuristico = TipoPontoTuristico::find($id);
        if ($tipoPontoTuristico->ponto_turisticos()->count() > 0) {
            return redirect()->array('/tiposPontosTuristicos')->with('error', 'Tipo de ponto turistico possui dependentes');
         }else{
            $tipoPontoTuristico->delete();
            return redirect()->array('/tiposPontosTuristicos')->with('success', 'Tipo de ponto turistico destruido com sucesso!');
        }
    }
}
