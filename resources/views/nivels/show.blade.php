@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Nível</h1>

    <p><strong>ID:</strong> {{ $nivel->id }}</p>
    <p><strong>Nome:</strong> {{ $nivel->nome }}</p>

    <a href="{{ route('nivels.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
