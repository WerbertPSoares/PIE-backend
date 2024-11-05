<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTelefoneMensagemToContatosTable extends Migration
{
    public function up()
    {
        Schema::table('contatos', function (Blueprint $table) {
            $table->string('telefone')->nullable(); // Adiciona a coluna telefone
            $table->text('mensagem')->nullable(); // Adiciona a coluna mensagem
        });
    }

    public function down()
    {
        Schema::table('contatos', function (Blueprint $table) {
            $table->dropColumn('telefone'); // Remove a coluna telefone
            $table->dropColumn('mensagem'); // Remove a coluna mensagem
        });
    }
}
