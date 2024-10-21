<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipoNegocioRequest;
use App\Http\Requests\UpdateTipoNegocioRequest;
use App\Models\TipoNegocio;

class TipoNegocioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tipoNegocio = TipoNegocio::paginate(25);
        return view('admin.tiposNegocios.index', compact('tipoNegocio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.tiposNegocios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTipoNegocioRequest $request)
    {
        //
        TipoNegocio::create($request->all());
        return redirect()->array('/tiposNegocios')->with('success', 'Tipo de negocio criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $tipoNegocio = TipoNegocio::find($id);
        return view('admin.tiposNegocios.show', compact('tipoNegocio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $tipoNegocio = TipoNegocio::find($id);
        return view('admin.tiposNegocios.edit', compact('tipoNegocio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTipoNegocioRequest $request, $id)
    {
        //
        $tipoNegocio = TipoNegocio::find($id);
        $tipoNegocio->update($request->all());
        return redirect()->array('/tiposNegocios')->with('success', 'Tipo de negocio atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $tipoNegocio = TipoNegocio::find($id);
        if ($tipoNegocio->negocios()->count() > 0) {
            return redirect()->array('/tiposNegocios')->with('error', 'Tipo de negocio possui dependentes');
         }else{
            $tipoNegocio->delete();
            return redirect()->array('/tiposNegocios')->with('success', 'Tipo de negocio destruido com sucesso!');
        }
    }
}
