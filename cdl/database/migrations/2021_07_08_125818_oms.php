<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Oms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // cadastro de OMS

        Schema::create('tbl_oms', function (Blueprint $table) {
            $table->integer('oms_id')->unsigned();      //  chave primaria auto incremento
            $table->string('oms_nome',100);             //  Nome da unidade
            $table->string('oms_razao',100);            //  razao social
            $table->string('oms_cnpj',14);              //  cnpj 
            $table->string('oms_tecnico',100);          //  nome do contato tecnico
            $table->string('oms_email',100);            //  e-mail do contato tecnico
            $table->string('oms_telefone',14);          //  telefone
            $table->string('oms_celular',14);           //  celular
            $table->string('oms_funcao',100);           //  função do contato tecnico 
            $table->string('oms_cep',8);                //  cep (Obrigatorio)
            $table->string('oms_cidade',30);            //  cidade
            $table->string('oms_bairro',100);           //  bairro   
            $table->string('oms_logradouro',100);       //  logradouro
            $table->string('oms_numero',10);            //  nuemro da residencia
            $table->string('oms_complemento',100);      //  complemento   
            $table->char('oms_status',1);               //  status     
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
