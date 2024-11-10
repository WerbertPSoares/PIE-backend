<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_doacoes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoacoesTable extends Migration
{
    public function up()
    {
        Schema::create('doacoes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('autor');
            $table->string('telefone');
            $table->string('estado');
            $table->text('sinopse');
            $table->string('imagem')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('doacoes');
    }
}
