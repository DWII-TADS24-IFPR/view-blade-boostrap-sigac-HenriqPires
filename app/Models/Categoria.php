<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome'];

public function curso()
{
    return $this->belongsTo(Curso::class); // 1:N
}

public function documentos()
{
    return $this->hasMany(Documento::class); // 1:N
}

public function comprovantes()
{
    return $this->hasMany(Comprovante::class); // 1:N
}

}
