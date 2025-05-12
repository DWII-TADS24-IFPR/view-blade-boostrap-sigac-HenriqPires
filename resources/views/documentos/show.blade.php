@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Documento</h1>

    <p><strong>Nome:</strong> {{ $documento->nome }}</p>
    <p><strong>Categoria:</strong> {{ $documento->categoria->nome ?? '-' }}</p>
    <p><strong>Usuário:</strong> {{ $documento->user->name ?? '-' }}</p>

    <a href="{{ route('documentos.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
