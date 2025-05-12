@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Aluno</h1>

    <p><strong>Nome:</strong> {{ $aluno->nome }}</p>
    <p><strong>CPF:</strong> {{ $aluno->cpf }}</p>
    <p><strong>Email:</strong> {{ $aluno->email }}</p>
    <p><strong>Curso:</strong> {{ $aluno->curso->nome ?? '-' }}</p>
    <p><strong>Turma:</strong> {{ $aluno->turma->ano ?? '-' }}</p>
    <p><strong>Usuário Vinculado:</strong> {{ $aluno->user->name ?? '-' }}</p>

    <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
