<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Funcionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            // funcionanrio

        Schema::create('TBL_FUNCIONARIOS', function (Blueprint $table) {

            // faz relação com OMS e UTV para cadastro

            $table->integer('fun_id')->unsigned();      //  chave primaria auto incremento
            $table->string('fun_nome',100);             //  nome do funcionario     
            $table->string('fun_email',100);            //  email   
            $table->string('fun_telefone',14);          //  telefone 1 
            $table->string('fun_telefone2',14);         //  telefone 2 
            $table->string('fun_senha',100);            //  senha cryptografada 
            $table->string('fun_status',100);           //  ativo ou inativo
            $table->string('fun_perfil',100);           //  perfil de acesso
            
            //$table->integer('contato_id')->unsigned();             //  chave estrangeira tabela administrativa
            // $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
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
        //
    }
}
