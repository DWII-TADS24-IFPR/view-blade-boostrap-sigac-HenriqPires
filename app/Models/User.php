<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{

    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    //1:1 
    public function aluno(): HasOne
    {
        return $this->hasOne(Aluno::class);
    }
    //1:N 
    public function documentos(): HasMany
    {
        return $this->hasMany(Documento::class);
    }
    //1:N
    public function comprovantes(): HasMany
    {
        return $this->hasMany(Comprovante::class);
    }

    //(permissão)
    //public function role(): BelongsTo
    //{
    //    return $this->belongsTo(Role::class);
    //}
}
