@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Documento</h1>

    <form action="{{ route('documentos.update', $documento) }}" method="POST">
        @csrf
        @method('PUT')
        @include('documentos.form')

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('documentos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
