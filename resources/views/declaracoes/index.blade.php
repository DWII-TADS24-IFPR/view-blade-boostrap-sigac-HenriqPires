@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Declarações</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('declaracoes.create') }}" class="btn btn-primary mb-3">Nova Declaração</a>

    @if($declaracoes->count())
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Hash</th>
                <th>Data</th>
                <th>Aluno</th>
                <th>Comprovante</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($declaracoes as $declaracao)
            <tr>
                <td>{{ $declaracao->hash }}</td>
                <td>{{ \Carbon\Carbon::parse($declaracao->data)->format('d/m/Y H:i') }}</td>
                <td>{{ $declaracao->aluno->nome ?? '-' }}</td>
                <td>{{ $declaracao->comprovante->atividade ?? '-' }}</td>
                <td>
                    <a href="{{ route('declaracoes.show', $declaracao) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('declaracoes.edit', $declaracao) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('declaracoes.destroy', $declaracao) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Excluir esta declaração?')" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>Nenhuma declaração cadastrada.</p>
    @endif
</div>
@endsection
