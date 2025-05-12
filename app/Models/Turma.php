<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turma extends Model
{
    use SoftDeletes;

    protected $fillable = ['ano', 'curso_id'];

    public function curso()
    {
        return $this->belongsTo(Curso::class);  // relacionamento com curso 1:N
    }

    public function alunos()
    {
    return $this->hasMany(Aluno::class); // 1:N
    }
}
//curso_id