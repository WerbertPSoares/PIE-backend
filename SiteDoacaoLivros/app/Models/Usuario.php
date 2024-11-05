<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

    protected $hidden = [
        'senha', // Oculta a senha ao serializar o modelo
    ];

    /**
     * Define o relacionamento com a model Solicitacao.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function solicitacoes()
    {
        return $this->hasMany(Solicitacao::class);
    }

    /**
     * Define o relacionamento com a model Doacao.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function doacoes()
    {
        return $this->hasMany(Doacao::class);
    }

    /**
     * Mutador para definir a senha do usuário.
     *
     * @param string $senha
     */
    public function setSenhaAttribute($senha)
    {
        $this->attributes['senha'] = ($senha);
    }

    /**
     * Método que retorna a senha para autenticação.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->attributes['senha']; 
    }
}
