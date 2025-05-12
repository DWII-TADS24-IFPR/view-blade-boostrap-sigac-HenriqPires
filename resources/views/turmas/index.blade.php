@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Turmas</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('turmas.create') }}" class="btn btn-primary mb-3">Cadastrar Nova Turma</a>

    @if($turmas->count())
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Ano</th>
                <th>Curso</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($turmas as $turma)
            <tr>
                <td>{{ $turma->ano }}</td>
                <td>{{ $turma->curso->nome ?? '-' }}</td>
                <td>
                    <a href="{{ route('turmas.show', $turma) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('turmas.edit', $turma) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('turmas.destroy', $turma) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Deseja excluir esta turma?')" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>Nenhuma turma cadastrada.</p>
    @endif
</div>
@endsection
