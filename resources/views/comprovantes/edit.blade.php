@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Comprovante</h1>

    <form action="{{ route('comprovantes.update', $comprovante) }}" method="POST">
        @csrf
        @method('PUT')
        @include('comprovantes.form')

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('comprovantes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
