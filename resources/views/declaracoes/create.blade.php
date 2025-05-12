@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Declaração</h1>

    <form action="{{ route('declaracoes.store') }}" method="POST">
        @csrf
        @include('declaracoes.form')

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('declaracoes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
