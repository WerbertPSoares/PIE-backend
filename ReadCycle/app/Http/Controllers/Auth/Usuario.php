<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'nome',
        'email',
        'senha', 
        'data_registro', 
    ];

    public function setSenhaAttribute($senha)
    {
        $this->attributes['senha'] = Hash::make($senha);
    }

    public function getAuthPassword()
    {
        return $this->senha; 
    }
}
