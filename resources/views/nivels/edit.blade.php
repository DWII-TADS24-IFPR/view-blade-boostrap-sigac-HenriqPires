@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Nível</h1>

    <form action="{{ route('nivels.update', $nivel) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" value="{{ $nivel->nome }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('nivels.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
