<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // ID auto-incremento
            $table->string('name'); // Nome do usuário
            $table->string('email')->unique(); // Email único
            $table->string('password'); // Senha
            $table->timestamps(); // Campos de data e hora
        });
    }

    public function down()
    {
        Schema::dropIfExists('users'); // Remove a tabela se existir
    }
}
