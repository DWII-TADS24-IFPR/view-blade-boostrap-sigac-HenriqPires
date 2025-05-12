@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Aluno</h1>

    <form action="{{ route('alunos.update', $aluno) }}" method="POST">
        @csrf
        @method('PUT')

        @include('alunos.form')

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
