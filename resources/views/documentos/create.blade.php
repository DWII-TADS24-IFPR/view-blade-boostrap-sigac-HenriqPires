@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Documento</h1>

    <form action="{{ route('documentos.store') }}" method="POST">
        @csrf
        @include('documentos.form')

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('documentos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
