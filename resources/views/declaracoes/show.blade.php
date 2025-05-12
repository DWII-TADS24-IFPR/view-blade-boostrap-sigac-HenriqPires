@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes da Declaração</h1>

    <p><strong>Hash:</strong> {{ $declaracao->hash }}</p>
    <p><strong>Data:</strong> {{ \Carbon\Carbon::parse($declaracao->data)->format('d/m/Y H:i') }}</p>
    <p><strong>Aluno:</strong> {{ $declaracao->aluno->nome ?? '-' }}</p>
    <p><strong>Comprovante:</strong> {{ $declaracao->comprovante->atividade ?? '-' }}</p>

    <a href="{{ route('declaracoes.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
