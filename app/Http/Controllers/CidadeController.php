<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCidadeRequest;
use App\Http\Requests\UpdateCidadeRequest;
use App\Models\Cidade;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cidade = Cidade::paginate(25);
        return view('admin.cidades.index', compact('cidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $estados = Estado::all();

        return view('admin.cidades.create', compact('estados'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCidadeRequest $request)
    {
        //
        Cidade::create($request->all());
        return redirect()->array('/cidades')->with('success', 'Cidade criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cidade $cidade)
    {
        //
        return view('admin.cidades.show', compact('cidade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cidade $cidade)
    {
        //
        $estados = Estado::all();
        return view('admin.ciades.edit', compact('cidade','estados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCidadeRequest $request, Cidade $cidade)
    {
        //
        $cidade->update($request->all());
        return redirect()->array('/cidades')->with('success', 'Cidade atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cidade $cidade)
    {
        //
        if ($cidades->enderecos()->count() > 0) {
            return redirect()->array('/cidades')->with('error', 'Cidade possui dependentes');
         }else{
            $cidade->delete();
            return redirect()->array('/cidades')->with('success', 'Cidade destruido com sucesso!');
        }
    }
}
