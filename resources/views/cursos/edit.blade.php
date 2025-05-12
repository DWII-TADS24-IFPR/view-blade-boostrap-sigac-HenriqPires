@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Curso</h1>

    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('PUT')
        @include('cursos.form')

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
