<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Execute as alterações na tabela.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(); // Cria um campo 'id' auto-incrementável
            $table->string('nome'); // Nome do usuário
            $table->string('email')->unique(); // Email do usuário, deve ser único
            $table->string('senha'); // Senha do usuário
            $table->timestamps(); // Campos 'created_at' e 'updated_at'
        });
    }

    /**
     * Reverta as alterações na tabela.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios'); // Remove a tabela 'usuarios' se existir
    }
}