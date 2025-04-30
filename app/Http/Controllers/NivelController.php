<?php

namespace App\Http\Controllers;
use App\Models\Nivel;


use Illuminate\Http\Request;

class NivelController extends Controller
{
    public function index()
    {
        $nivels = Nivel::all();
        return view('nivels.index', compact('nivels'));
    }

    public function create()
    {
        return view('nivels.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nome' => 'required']);
        Nivel::create($request->only('nome'));
        return redirect()->route('nivels.index')->with('success', 'Nível criado com sucesso!');
    }

    public function show(Nivel $nivel)
    {
        return view('nivels.show', compact('nivel'));
    }

    public function edit(Nivel $nivel)
    {
        return view('nivels.edit', compact('nivel'));
    }

    public function update(Request $request, Nivel $nivel)
    {
        $request->validate(['nome' => 'required']);
        $nivel->update($request->only('nome'));
        return redirect()->route('nivels.index')->with('success', 'Nível atualizado com sucesso!');
    }

    public function destroy(Nivel $nivel)
    {
        $nivel->delete();
        return redirect()->route('nivels.index')->with('success', 'Nível excluído com sucesso!');
    }
        
}
