@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Novo Nível</h1>

    <form action="{{ route('nivels.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('nivels.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
