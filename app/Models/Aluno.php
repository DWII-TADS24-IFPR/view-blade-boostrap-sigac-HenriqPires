<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'cpf', 'email', 'senha', 'user_id', 'curso_id', 'turma_id'];

    public function user()
{
    return $this->belongsTo(User::class); // 1:1
}

public function curso()
{
    return $this->belongsTo(Curso::class); // 1:N
}

public function turma()
{
    return $this->belongsTo(Turma::class); // 1:N
}

public function comprovantes()
{
    return $this->hasMany(Comprovante::class); // 1:N
}

public function declaracoes()
{
    return $this->hasMany(Declaracao::class); // 1:N
}

}


