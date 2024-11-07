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

    /**
     * Manipula o caminho da capa de livro antes de salvar.
     * Esse método pode ser útil se você quiser manipular a capa de alguma forma.
     *
     * @param  string  $value
     * @return void
     */
    public function setCapaAttribute($value)
    {
        if (is_string($value)) {
            $this->attributes['capa'] = $value; 
        } else {
            $this->attributes['capa'] = null; // Caso não haja imagem
        }
    }

    /**
     * Acessor para recuperar o caminho completo da capa.
     * Garante que o caminho da imagem seja acessado corretamente.
     *
     * @param  string  $value
     * @return string
     */
    public function getCapaAttribute($value)
    {
        // Verifica se há valor e retorna a URL pública para exibição
        return $value ? asset('storage/' . $value) : null;
    }
}
