@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Cursos</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('cursos.create') }}" class="btn btn-primary mb-3">Cadastrar Novo Curso</a>

    @if($cursos->count())
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sigla</th>
                <th>Total de Horas</th>
                <th>Nível</th>
                <th>Eixo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
            <tr>
                <td>{{ $curso->nome }}</td>
                <td>{{ $curso->sigla }}</td>
                <td>{{ $curso->total_horas }}</td>
                <td>{{ $curso->nivel->nome ?? '-' }}</td>
                <td>{{ $curso->eixo->nome ?? '-' }}</td>
                <td>
                    <a href="{{ route('cursos.show', $curso) }}" class="btn btn-info btn-sm">Visualizar</a>
                    <a href="{{ route('cursos.edit', $curso) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('cursos.destroy', $curso) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Excluir este curso?')" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>Nenhum curso cadastrado.</p>
    @endif
</div>
@endsection
