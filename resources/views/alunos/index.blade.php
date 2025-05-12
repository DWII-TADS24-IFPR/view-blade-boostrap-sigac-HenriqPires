@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Alunos</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('alunos.create') }}" class="btn btn-primary mb-3">Cadastrar Novo Aluno</a>

    @if($alunos->count())
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Curso</th>
                <th>Turma</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->cpf }}</td>
                    <td>{{ $aluno->email }}</td>
                    <td>{{ $aluno->curso->nome ?? '-' }}</td>
                    <td>{{ $aluno->turma->ano ?? '-' }}</td>
                    <td>
                        <a href="{{ route('alunos.show', $aluno) }}" class="btn btn-info btn-sm">Visualizar</a>
                        <a href="{{ route('alunos.edit', $aluno) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('alunos.destroy', $aluno) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Excluir este aluno?')" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>Nenhum aluno cadastrado.</p>
    @endif
</div>
@endsection
