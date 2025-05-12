<?php

namespace App\Http\Controllers;

use App\Models\Comprovante;
use App\Models\Categoria;
use App\Models\Aluno;
use App\Models\User;
use Illuminate\Http\Request;

class ComprovanteController extends Controller
{
    public function index()
    {
        $comprovantes = Comprovante::with(['categoria', 'aluno', 'user'])->get();
        return view('comprovantes.index', compact('comprovantes'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        $alunos = Aluno::all();
        $users = User::all();
        return view('comprovantes.create', compact('categorias', 'alunos', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'horas' => 'required|numeric',
            'atividade' => 'required',
            'categoria_id' => 'required',
            'aluno_id' => 'required',
            'user_id' => 'required',
        ]);

        Comprovante::create($request->all());
        return redirect()->route('comprovantes.index')->with('success', 'Comprovante cadastrado com sucesso!');
    }

    public function show(Comprovante $comprovante)
    {
        return view('comprovantes.show', compact('comprovante'));
    }

    public function edit(Comprovante $comprovante)
    {
        $categorias = Categoria::all();
        $alunos = Aluno::all();
        $users = User::all();
        return view('comprovantes.edit', compact('comprovante', 'categorias', 'alunos', 'users'));
    }

    public function update(Request $request, Comprovante $comprovante)
    {
        $request->validate([
            'horas' => 'required|numeric',
            'atividade' => 'required',
            'categoria_id' => 'required',
            'aluno_id' => 'required',
            'user_id' => 'required',
        ]);

        $comprovante->update($request->all());
        return redirect()->route('comprovantes.index')->with('success', 'Comprovante atualizado com sucesso!');
    }

    public function destroy(Comprovante $comprovante)
    {
        $comprovante->delete();
        return redirect()->route('comprovantes.index')->with('success', 'Comprovante removido com sucesso!');
    }
}
