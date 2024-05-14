<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 250);
            $table->bigInteger('cpf');
            $table->date('dt_nascimento');
            $table->string('sexo', 1);
            $table->integer('matricula');
            $table->integer('id_responsavel');
            $table->string('parentesco');
            $table->bigInteger('telefone');
            $table->string('email', 255);
            $table->string('turma', 100);
            $table->string('turno', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
};
