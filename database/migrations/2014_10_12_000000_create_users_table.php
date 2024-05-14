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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('parentesco', '50');
            $table->string('name', '255');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', '200');
            $table->string('rg', '50');
            $table->bigInteger('cpf');
            $table->date('dt_nascimento');
            $table->string('sexo', '1');
            $table->string('rua', '200');
            $table->string('cep', '20');
            $table->string('uf', '50');
            $table->string('cidade', '200');
            $table->string('complemento', '200');
            $table->string('bairro', '200');
            $table->bigInteger('telefone');
            $table->integer('perfil');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
