<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Turma;
use App\Models\User;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::with(['curso', 'turma', 'user'])->get();
        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        $cursos = Curso::all();
        $turmas = Turma::all();
        $users = User::all();
        return view('alunos.create', compact('cursos', 'turmas', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required|unique:alunos',
            'email' => 'required|email|unique:alunos',
            'senha' => 'required',
            'user_id' => 'required',
            'curso_id' => 'required',
            'turma_id' => 'required',
        ]);

        Aluno::create($request->all());

        return redirect()->route('alunos.index')->with('success', 'Aluno cadastrado!');
    }

    public function show(Aluno $aluno)
    {
        return view('alunos.show', compact('aluno'));
    }

    public function edit(Aluno $aluno)
    {
        $cursos = Curso::all();
        $turmas = Turma::all();
        $users = User::all();
        return view('alunos.edit', compact('aluno', 'cursos', 'turmas', 'users'));
    }

    public function update(Request $request, Aluno $aluno)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required|unique:alunos,cpf,' . $aluno->id,
            'email' => 'required|email|unique:alunos,email,' . $aluno->id,
            'senha' => 'required',
            'user_id' => 'required',
            'curso_id' => 'required',
            'turma_id' => 'required',
        ]);

        $aluno->update($request->all());

        return redirect()->route('alunos.index')->with('success', 'Aluno atualizado!');
    }

    public function destroy(Aluno $aluno)
    {
        $aluno->delete();
        return redirect()->route('alunos.index')->with('success', 'Aluno removido!');
    }
}
