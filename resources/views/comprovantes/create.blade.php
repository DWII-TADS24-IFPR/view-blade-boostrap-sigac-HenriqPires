@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Comprovante</h1>

    <form action="{{ route('comprovantes.store') }}" method="POST">
        @csrf
        @include('comprovantes.form')

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('comprovantes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
