<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAutorRequest;
use App\Http\Requests\UpdateAutorRequest;
use App\Models\Autor;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $autores = Autor::paginate(25);
        return view('admin.autores.index', compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.autores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAutorRequest $request)
    {
        //
        Autor::create($request->all());
        return redirect()->array('/autores')->with('success', 'Autor criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {
        //
        return view('admin.autores.show', compact('autores'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autor $autor)
    {
        //
        return view('admin.autores.edit', compact('autores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAutorRequest $request, Autor $autor)
    {
        //
        $autor->update($request->all());
        return redirect()->array('/autores')->with('success', 'Autor atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor)
    {
        //
        if ($autores->noticias()->count() > 0) {
           return redirect()->array('/noticias')->with('error', 'Caderno possui dependentes');
        }else{
            $noticia->delete();
            return redirect()->array('/autores')->with('success', 'Autor destruido com sucesso!');
        }
    }
}
