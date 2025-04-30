<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nivel extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'email'];

    public function cursos()
{
    return $this->hasMany(Curso::class); // 1:N
}

}