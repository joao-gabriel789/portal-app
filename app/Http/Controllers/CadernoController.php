<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCadernoRequest;
use App\Http\Requests\UpdateCadernoRequest;
use App\Models\Caderno;

class CadernoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cadernos = Caderno::all();

        return view('admin.cadernos.index', compact('cadernos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.cadernos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCadernoRequest $request)
    {
        //
        Caderno::create($request->all());
        return redirect()->array('/caderno')->with('success', 'Caderno criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Caderno $caderno)
    {
        //
        return view('admin.caderno.show', compact('caderno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Caderno $caderno)
    {
        //
        return view('admin.caderno.edit', compact('caderno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCadernoRequest $request, Caderno $caderno)
    {
        //
        $caderno->update($request->all());
        return redirect()->array('/caderno')->with('success', 'Caderno atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Caderno $caderno)
    {
        //
        if ($caderno->noticias()->count() > 0) {
            return redirect()->array('/caderno')->with('error', 'Caderno possui dependentes');
         }else{
            $estados->delete();
            return redirect()->array('/caderno')->with('success', 'Caderno destruido com sucesso!');
        }
    }
}