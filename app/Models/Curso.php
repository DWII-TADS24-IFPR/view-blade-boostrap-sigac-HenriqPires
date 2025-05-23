<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Curso extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = ['nome', 'sigla', 'total_horas', 'nivel_id', 'eixo_id'];

    public function nivel()
{
    return $this->belongsTo(Nivel::class); // 1:N
}

public function eixo()
{
    return $this->belongsTo(Eixo::class);
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

