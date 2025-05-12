@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Documentos</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('documentos.create') }}" class="btn btn-primary mb-3">Novo Documento</a>

    @if($documentos->count())
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Usuário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($documentos as $documento)
            <tr>
                <td>{{ $documento->nome }}</td>
                <td>{{ $documento->categoria->nome ?? '-' }}</td>
                <td>{{ $documento->user->name ?? '-' }}</td>
                <td>
                    <a href="{{ route('documentos.show', $documento) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('documentos.edit', $documento) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('documentos.destroy', $documento) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Excluir este documento?')" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>Nenhum documento cadastrado.</p>
    @endif
</div>
@endsection
