@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Curso</h1>

    <p><strong>Nome:</strong> {{ $curso->nome }}</p>
    <p><strong>Sigla:</strong> {{ $curso->sigla }}</p>
    <p><strong>Total de Horas:</strong> {{ $curso->total_horas }}</p>
    <p><strong>Nível:</strong> {{ $curso->nivel->nome ?? '-' }}</p>
    <p><strong>Eixo:</strong> {{ $curso->eixo->nome ?? '-' }}</p>

    <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
