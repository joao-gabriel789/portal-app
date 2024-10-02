<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstadoRequest;
use App\Http\Requests\UpdateEstadoRequest;
use App\Models\Estado;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $estados = Estado::paginate(25);
        return view('admin.estados.index', compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.estados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEstadoRequest $request)
    {
        //
        Estado::create($request->all());
        return redirect()->array('/estados')->with('success', 'Estado criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estado $estado)
    {
        //
        return view('admin.estados.show', compact('estado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estado $estado)
    {
        //
        return view('admin.estados.edit', compact('estado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEstadoRequest $request, Estado $estado)
    {
        //
        $estado->update($request->all());
        return redirect()->array('/estados')->with('success', 'Estado atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estado $estado)
    {
        //
        if ($estados->cidades()->count() > 0) {
            return redirect()->array('/cidades')->with('error', 'Estado possui dependentes');
         }else{
            $estados->delete();
            return redirect()->array('/estados')->with('success', 'Estado destruido com sucesso!');
        }
    }
}
