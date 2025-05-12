@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Categorias</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3">Cadastrar Nova Categoria</a>

    @if($categorias->count())
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Máximo de Horas</th>
                <th>Curso</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->nome }}</td>
                <td>{{ $categoria->maximo_horas }}</td>
                <td>{{ $categoria->curso->nome ?? '-' }}</td>
                <td>
                    <a href="{{ route('categorias.show', $categoria) }}" class="btn btn-info btn-sm">Visualizar</a>
                    <a href="{{ route('categorias.edit', $categoria) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Excluir esta categoria?')" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>Nenhuma categoria cadastrada.</p>
    @endif
</div>
@endsection
