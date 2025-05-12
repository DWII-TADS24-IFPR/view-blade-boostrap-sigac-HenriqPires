@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Categoria</h1>

    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        @include('categorias.form')

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
