@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes da Turma</h1>

    <p><strong>Ano:</strong> {{ $turma->ano }}</p>
    <p><strong>Curso:</strong> {{ $turma->curso->nome ?? '-' }}</p>

    <a href="{{ route('turmas.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
