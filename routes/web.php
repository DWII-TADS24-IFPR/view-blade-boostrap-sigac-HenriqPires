<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComprovanteController;
use App\Http\Controllers\DeclaracaoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\TurmaController;




//nivel
Route::resource('nivels', NivelController::class);

Route::get('/', function () {
    return view('welcome');
});

//cursos
Route::resource('cursos', CursoController::class);
//categorias
Route::resource('categorias', CategoriaController::class);
//comprovantes>Erro
Route::resource('comprovantes', ComprovanteController::class);
//declarações
Route::resource('declaracoes', DeclaracaoController::class);
//documentos
Route::resource('documentos', DocumentoController::class);
//turmas
Route::resource('turmas', TurmaController::class);




//alunos
Route::resource('alunos', AlunoController::class);
Route::get('alunos/trashed', [AlunoController::class, 'trashed']);
Route::put('alunos/{id}/restore', [AlunoController::class, 'restore']);


//relatorio
Route::get('/relatorio.curso', [RelatorioController::class, 'emiteRelatorio']);
