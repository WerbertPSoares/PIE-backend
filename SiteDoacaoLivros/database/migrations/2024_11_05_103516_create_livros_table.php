<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo'); // Campo para o título do livro
            $table->string('autor'); // Campo para o autor do livro
            $table->string('genero')->nullable(); // Campo para o gênero
            $table->string('isbn')->nullable(); // Campo para o ISBN
            $table->string('editora')->nullable(); // Campo para a editora
            $table->integer('ano')->nullable(); // Campo para o ano de publicação
            $table->text('sinopse')->nullable(); // Campo para a sinopse do livro
            $table->integer('paginas')->nullable(); // Campo para o número de páginas
            $table->string('capa')->nullable(); // Campo para o link da capa do livro
            $table->timestamps(); // Campos para created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('livros'); // Remove a tabela livros ao reverter a migração
    }
}

