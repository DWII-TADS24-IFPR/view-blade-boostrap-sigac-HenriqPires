@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Curso</h1>

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        @include('cursos.form')

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
