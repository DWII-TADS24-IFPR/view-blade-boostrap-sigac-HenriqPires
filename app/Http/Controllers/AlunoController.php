<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all(); 
        return response()->json($alunos);
    }

  
    public function store(Request $request)
    {
        $aluno = Aluno::create($request->all());
        return response()->json($aluno, 201);
    }

    
    public function show($id)
    {
        $aluno = Aluno::find($id);
        return response()->json($aluno);
    }

    public function update(Request $request, $id)
    {
        $aluno = Aluno::find($id);
        $aluno->update($request->all());
        return response()->json($aluno);
    }

   
    public function destroy($id)
    {
        $aluno = Aluno::find($id);
        $aluno->delete(); 
        return response()->json(null, 204);
    }

  
    public function restore($id)
    {
        $aluno = Aluno::withTrashed()->find($id);
        $aluno->restore();
        return response()->json($aluno);
    }

    
    public function trashed()
    {
        $alunos = Aluno::onlyTrashed()->get();
        return response()->json($alunos);
    }
}
