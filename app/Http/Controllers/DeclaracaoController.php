<?php

namespace App\Http\Controllers;

use App\Models\Declaracao;
use App\Models\Aluno;
use App\Models\Comprovante;
use Illuminate\Http\Request;

class DeclaracaoController extends Controller
{
    public function index()
    {
        $declaracoes = Declaracao::with(['aluno', 'comprovante'])->get();
        return view('declaracoes.index', compact('declaracoes'));
    }

    public function create()
    {
        $alunos = Aluno::all();
        $comprovantes = Comprovante::all();
        return view('declaracoes.create', compact('alunos', 'comprovantes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'hash' => 'required|unique:declaracoes',
            'data' => 'required|date',
            'aluno_id' => 'required',
            'comprovante_id' => 'required',
        ]);

        Declaracao::create($request->all());
        return redirect()->route('declaracoes.index')->with('success', 'Declaração cadastrada com sucesso!');
    }

    public function show(Declaracao $declaracao)
    {
        return view('declaracoes.show', compact('declaracao'));
    }

    public function edit(Declaracao $declaracao)
    {
        $alunos = Aluno::all();
        $comprovantes = Comprovante::all();
        return view('declaracoes.edit', compact('declaracao', 'alunos', 'comprovantes'));
    }

    public function update(Request $request, Declaracao $declaracao)
    {
        $request->validate([
            'hash' => 'required|unique:declaracoes,hash,' . $declaracao->id,
            'data' => 'required|date',
            'aluno_id' => 'required',
            'comprovante_id' => 'required',
        ]);

        $declaracao->update($request->all());
        return redirect()->route('declaracoes.index')->with('success', 'Declaração atualizada com sucesso!');
    }

    public function destroy(Declaracao $declaracao)
    {
        $declaracao->delete();
        return redirect()->route('declaracoes.index')->with('success', 'Declaração excluída com sucesso!');
    }
}
