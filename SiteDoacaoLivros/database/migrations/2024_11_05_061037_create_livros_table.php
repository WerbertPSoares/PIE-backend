<?php
// database/migrations/2024_11_05_061037_create_livros_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('autor');        // Campo para o autor do livro
            $table->string('telefone');     // Campo para o telefone do doador
            $table->string('estado');       // Campo para o estado do doador
            $table->text('sinopse');        // Campo para a sinopse do livro
            $table->string('imagem')->nullable(); // Campo para a imagem do livro (opcional)
            $table->timestamps();           // Campos para created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('livros');
    }
}