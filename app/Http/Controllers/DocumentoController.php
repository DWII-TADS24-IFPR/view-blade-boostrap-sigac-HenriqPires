<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\Categoria;
use App\Models\User;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function index()
    {
        $documentos = Documento::with(['categoria', 'user'])->get();
        return view('documentos.index', compact('documentos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        $users = User::all();
        return view('documentos.create', compact('categorias', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'categoria_id' => 'required',
            'user_id' => 'required',
        ]);

        Documento::create($request->all());
        return redirect()->route('documentos.index')->with('success', 'Documento cadastrado com sucesso!');
    }

    public function show(Documento $documento)
    {
        return view('documentos.show', compact('documento'));
    }

    public function edit(Documento $documento)
    {
        $categorias = Categoria::all();
        $users = User::all();
        return view('documentos.edit', compact('documento', 'categorias', 'users'));
    }

    public function update(Request $request, Documento $documento)
    {
        $request->validate([
            'nome' => 'required',
            'categoria_id' => 'required',
            'user_id' => 'required',
        ]);

        $documento->update($request->all());
        return redirect()->route('documentos.index')->with('success', 'Documento atualizado com sucesso!');
    }

    public function destroy(Documento $documento)
    {
        $documento->delete();
        return redirect()->route('documentos.index')->with('success', 'Documento excluído com sucesso!');
    }
}
