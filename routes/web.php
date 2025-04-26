<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('alunos', AlunoController::class);

// Para restaurar ou listar alunos deletados
Route::get('alunos/trashed', [AlunoController::class, 'trashed']);
Route::put('alunos/{id}/restore', [AlunoController::class, 'restore']);