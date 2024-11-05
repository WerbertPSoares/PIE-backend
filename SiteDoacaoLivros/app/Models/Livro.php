<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $table = 'livros';
    
    protected $fillable = [
        'titulo',
        'autor',
        'genero',
        'isbn',
        'editora',
        'ano',
        'sinopse',
        'paginas',
        'capa',
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
