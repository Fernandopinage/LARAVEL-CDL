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
            $table->increments('oms_id')->unsigned();      //  chave primaria auto incremento
            $table->string('oms_nome')->nullable();             //  Nome da unidade
            $table->string('oms_email')->nullable();            // email da OMS (Obrigadorio)
            $table->string('oms_senha')->nullable();             // definir a senha de acesso (obrigatorio)
           /* $table->string('oms_razao',100); */           //  razao social
           // $table->string('oms_cnpj',14);              //  cnpj 
            $table->string('oms_tecnico')->nullable();          //  nome do contato tecnico
            $table->string('oms_email_tecnico')->nullable();            //  e-mail do contato tecnico
            $table->string('oms_telefone')->nullable();          //  telefone
            $table->string('oms_celular')->nullable();           //  celular
            $table->string('oms_funcao')->nullable();           //  função do contato tecnico 
            $table->string('oms_cep')->nullable();                //  cep (Obrigatorio)
            $table->string('oms_uf')->nullable();
            $table->string('oms_cidade')->nullable();            //  cidade
            $table->string('oms_bairro')->nullable();           //  bairro   
            $table->string('oms_logradouro')->nullable();       //  logradouro
            $table->string('oms_numero')->nullable();            //  nuemro da residencia
            $table->string('oms_complemento')->nullable();      //  complemento   
            $table->char('oms_status')->nullable();               //  status     
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
