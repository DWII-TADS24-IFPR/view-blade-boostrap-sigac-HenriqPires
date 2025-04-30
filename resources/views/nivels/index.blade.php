@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Níveis</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('nivels.create') }}" class="btn btn-primary mb-3">Adicionar Novo Nível</a>

    @if($nivels->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($nivels as $nivel)
                    <tr>
                        <td>{{ $nivel->id }}</td>
                        <td>{{ $nivel->nome }}</td>
                        <td>
                            <a href="{{ route('nivels.edit', $nivel) }}" class="btn btn-warning btn-sm">Editar</a>
                            <a href="{{ route('nivels.show', $nivel) }}" class="btn btn-info btn-sm">Visualizar</a>
                            <form action="{{ route('nivels.destroy', $nivel) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Deseja excluir este nível?')" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhum nível cadastrado.</p>
    @endif
</div>
@endsection
