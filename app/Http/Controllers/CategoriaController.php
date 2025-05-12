<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Curso;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::with('curso')->get();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        $cursos = Curso::all();
        return view('categorias.create', compact('cursos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'maximo_horas' => 'required|numeric',
            'curso_id' => 'required',
        ]);

        Categoria::create($request->all());
        return redirect()->route('categorias.index')->with('success', 'Categoria criada com sucesso!');
    }

    public function show(Categoria $categoria)
    {
        return view('categorias.show', compact('categoria'));
    }

    public function edit(Categoria $categoria)
    {
        $cursos = Curso::all();
        return view('categorias.edit', compact('categoria', 'cursos'));
    }

    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'nome' => 'required',
            'maximo_horas' => 'required|numeric',
            'curso_id' => 'required',
        ]);

        $categoria->update($request->all());
        return redirect()->route('categorias.index')->with('success', 'Categoria atualizada com sucesso!');
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index')->with('success', 'Categoria removida com sucesso!');
    }
}
