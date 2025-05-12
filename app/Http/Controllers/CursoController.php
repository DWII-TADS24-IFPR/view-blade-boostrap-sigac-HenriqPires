<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Eixo;
use App\Models\Nivel;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::with(['nivel', 'eixo'])->get();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        $nivels = Nivel::all();
        $eixos = Eixo::all();
        return view('cursos.create', compact('nivels', 'eixos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'sigla' => 'required',
            'total_horas' => 'required|numeric',
            'nivel_id' => 'required',
            'eixo_id' => 'required',
        ]);

        Curso::create($request->all());
        return redirect()->route('cursos.index')->with('success', 'Curso cadastrado com sucesso!');
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        $nivels = Nivel::all();
        $eixos = Eixo::all();
        return view('cursos.edit', compact('curso', 'nivels', 'eixos'));
    }

    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'nome' => 'required',
            'sigla' => 'required',
            'total_horas' => 'required|numeric',
            'nivel_id' => 'required',
            'eixo_id' => 'required',
        ]);

        $curso->update($request->all());
        return redirect()->route('cursos.index')->with('success', 'Curso atualizado com sucesso!');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index')->with('success', 'Curso excluído com sucesso!');
    }
}
