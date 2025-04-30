<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'email'];

    public function nivel()
{
    return $this->belongsTo(Nivel::class); // 1:N
}

public function categorias()
{
    return $this->hasMany(Categoria::class); // 1:N
}

public function alunos()
{
    return $this->hasMany(Aluno::class); // 1:N
}

public function turmas()
{
    return $this->hasMany(Turma::class); // 1:N
}

}

//nome
// descricao
//duracao
//codigo

