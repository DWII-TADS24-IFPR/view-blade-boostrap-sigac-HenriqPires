@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Declaração</h1>

    <form action="{{ route('declaracoes.update', $declaracao) }}" method="POST">
        @csrf
        @method('PUT')
        @include('declaracoes.form')

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('declaracoes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
