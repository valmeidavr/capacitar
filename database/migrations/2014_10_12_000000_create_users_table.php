<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->date('dtnascimento');
            $table->string('cpf')->unique();
            $table->string('documento')->nullable();
            $table->string('telefone')->nullable();
            $table->enum('genero', ['M', 'F', 'O', 'ND']);
            $table->string('cep', 8);
            $table->string('logradouro');
            $table->string('numero');
            $table->string('complemento')->nullable();
            $table->string('bairro');
            $table->string('cidade');
            $table->char('uf', 2);
            
        /*     //Chaves FK
            $table->unsignedBigInteger('instituicaos_id');
            $table->foreign('instituicaos_id')->references('id')->on('instituicaos'); */

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
}
