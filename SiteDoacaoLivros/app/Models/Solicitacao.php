<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    use HasFactory;
    protected $table = 'solicitacoes';

    protected $fillable = [
        'livro_id',
        'usuario_id',
        'status', 
        'data_solicitacao', 
    ];

    /**
     * Define o relacionamento com a model Livro.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function livro()
    {
        return $this->belongsTo(Livro::class);
    }

    /**
     * Define o relacionamento com a model Usuario (ou o nome que você usar para usuários).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo(Usuario::class); // Substitua 'Usuario' pelo nome correto da model de usuários, se necessário
    }
}
