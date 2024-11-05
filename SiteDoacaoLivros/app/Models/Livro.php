<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'autor',
        'descricao',
        'ano_publicacao',
        'categoria',
        'disponivel', 
    ];

    /**
     * Define o relacionamento com as doações.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function doacoes()
    {
        return $this->hasMany(Doacao::class);
    }
}
