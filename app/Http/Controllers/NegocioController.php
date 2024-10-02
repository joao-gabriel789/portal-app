<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNegocioRequest;
use App\Http\Requests\UpdateNegocioRequest;
use App\Models\Negocio;

class NegocioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $negocios = Negocio::paginate(25);
        return view('admin.negocios.index', compact('negocios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $tipoNegocio = TipoNegocio::all();
        $enderecos = Endereco::all();
        return view('admin.negocios.create', compact('enderecos','tipoNegocio'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNegocioRequest $request)
    {
        //
        Negocio::create($request->all());
        return redirect()->array('/negocios')->with('success', 'Negocio criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Negocio $negocio)
    {
        //
        return view('admin.negocios.show', compact('negocio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Negocio $negocio)
    {
        //
        $tipoNegocio = TipoNegocio::all();
        $enderecos = Endereco::all();
        return view('admin.negocios.edit', compact('negocio','enderecos','tipoNegocio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNegocioRequest $request, Negocio $negocio)
    {
        //
        $negocio->update($request->all());
        return redirect()->array('/negocios')->with('success', 'Negocio atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Negocio $negocio)
    {
        //
        $negocio->delete();
        return redirect()->array('/negocios')->with('success', 'Negocio destruido com sucesso!');
    }
}
