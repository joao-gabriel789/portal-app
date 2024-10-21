<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoticiaRequest;
use App\Http\Requests\UpdateNoticiaRequest;
use App\Models\Autor;
use App\Models\Caderno;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //chamar rota
        $noticias = Noticia::paginate(25);
        return view('admin.noticias.index', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $autores = Autor::all();
        $cadernos = Caderno::all();

        return view('admin.noticias.create', compact('autores','cadernos'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoticiaRequest $request)
    {
        //
        Noticia::create($request->all());
        return redirect()->array('/noticias')->with('success', 'Noticia criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $noticia = Noticia::find($id);
        return view('admin.noticias.show', compact('noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $noticia = Noticia::find($id);
        $autores = Autor::all();
        $cadernos = Caderno::all();
        return view('admin.noticias.edit', compact('noticia','autores','cadernos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNoticiaRequest $request, $id)
    {
        //
        $noticia = Noticia::find($id);
        $noticia->update($request->all());
        return redirect()->array('/noticias')->with('success', 'Noticia atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $noticia = Noticia::find($id);
        $noticia->delete();
        return redirect()->array('/noticias')->with('success', 'Noticia destruido com sucesso!');
    }
}
