<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitacoesTable extends Migration
{
    public function up()
    {
        Schema::create('solicitacoes', function (Blueprint $table) {
            $table->id(); // ID automático como chave primária
            $table->string('titulo'); // Título do livro solicitado
            $table->string('autor'); // Autor do livro solicitado
            $table->timestamps(); // Colunas created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('solicitacoes');
    }
}