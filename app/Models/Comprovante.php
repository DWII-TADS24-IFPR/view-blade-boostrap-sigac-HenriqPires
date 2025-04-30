<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comprovante extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'tipo'];

  public function aluno()
 {
    return $this->belongsTo(Aluno::class); // 1:N
 }

  public function categoria()
 {
    return $this->belongsTo(Categoria::class); // 1:N
 }

  public function user()
 {
    return $this->belongsTo(User::class); // 1:N
 }

  public function declaracao()
 {
    return $this->hasOne(Declaracao::class); // 1:1
 }

}
