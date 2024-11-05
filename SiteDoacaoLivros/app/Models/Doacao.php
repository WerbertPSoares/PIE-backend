<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'livro_id',
        'data_doacao',
        'status',
    ];

    /**
     * Define o relacionamento com o usuário.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    /**
     * Define o relacionamento com o livro.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function livro()
    {
        return $this->belongsTo(Livro::class);
    }
}
