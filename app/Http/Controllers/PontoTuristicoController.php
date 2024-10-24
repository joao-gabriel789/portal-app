<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePontoTuristicoRequest;
use App\Http\Requests\UpdatePontoTuristicoRequest;
use App\Models\Endereco;
use App\Models\PontoTuristico;
use App\Models\TipoPontoTuristico;

class PontoTuristicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pontoTuristico = PontoTuristico::paginate(25);
        return view('admin.pontosTuristicos.index', compact('ponto_turisticos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $tipoPontoTuristico = TipoPontoTuristico::all();
        $enderecos = Endereco::all();
        return view('admin.pontosTuristicos.create', compact('enderecos','tipoPontoTuristico'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePontoTuristicoRequest $request)
    {
        //
        PontoTuristico::create($request->all());
        return redirect()->array('/pontosTuristicos')->with('success', 'Ponto turistico criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $pontoTuristico = PontoTuristico::find($id);
        return view('admin.pontosTuristicos.show', compact('ponto_turisticos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $pontoTuristico = PontoTuristico::find($id);
        $tipoPontoTuristico = TipoPontoTuristico::all();
        $enderecos = Endereco::all();
        return view('admin.pontosTuristicos.edit', compact('ponto_turisticos','enderecos','tipoPontoTuristico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePontoTuristicoRequest $request, $id)
    {
        //
        $pontoTuristico = PontoTuristico::find($id);
        $pontoTuristico->update($request->all());
        return redirect()->array('/pontosTuristicos')->with('success', 'Ponto turistico atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $pontoTuristico = PontoTuristico::find($id);
        $pontoTuristico->delete();
        return redirect()->array('/pontosTuristicos')->with('success', 'Ponto turistico destruido com sucesso!');
    }
}
