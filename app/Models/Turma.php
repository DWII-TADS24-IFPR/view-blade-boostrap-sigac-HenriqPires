<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turma extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'curso_id'];

    public function curso()
    {
        return $this->belongsTo(Curso::class);  // Relacionamento com Curso
    }
}
//curso_id