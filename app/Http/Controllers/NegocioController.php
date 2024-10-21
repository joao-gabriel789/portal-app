<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNegocioRequest;
use App\Http\Requests\UpdateNegocioRequest;
use App\Models\Endereco;
use App\Models\Negocio;
use App\Models\TipoNegocio;

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
    public function show($id)
    {
        //
        $negocio = Negocio::find($id);
        return view('admin.negocios.show', compact('negocio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $negocio = Negocio::find($id);
        $tipoNegocio = TipoNegocio::all();
        $enderecos = Endereco::all();
        return view('admin.negocios.edit', compact('negocio','enderecos','tipoNegocio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNegocioRequest $request, $id)
    {
        //
        $negocio = Negocio::find($id);
        $negocio->update($request->all());
        return redirect()->array('/negocios')->with('success', 'Negocio atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $negocio = Negocio::find($id);
        $negocio->delete();
        return redirect()->array('/negocios')->with('success', 'Negocio destruido com sucesso!');
    }
}
