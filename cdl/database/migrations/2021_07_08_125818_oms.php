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
            $table->string('oms_nome',100)->nullable();             //  Nome da unidade
            $table->string('oms_email',100)->nullable();            // email da OMS (Obrigadorio)
            $table->string('oms_senha',255)->nullable();             // definir a senha de acesso (obrigatorio)
           /* $table->string('oms_razao',100); */           //  razao social
           // $table->string('oms_cnpj',14);              //  cnpj 
            $table->string('oms_tecnico',100)->nullable();          //  nome do contato tecnico
            $table->string('oms_email_tecnico',100)->nullable();            //  e-mail do contato tecnico
            $table->string('oms_telefone',20)->nullable();          //  telefone
            $table->string('oms_celular',20)->nullable();           //  celular
            $table->string('oms_funcao',100)->nullable();           //  função do contato tecnico 
            $table->string('oms_cep',9)->nullable();                //  cep (Obrigatorio)
            $table->string('oms_uf',2)->nullable();
            $table->string('oms_cidade',30)->nullable();            //  cidade
            $table->string('oms_bairro',100)->nullable();           //  bairro   
            $table->string('oms_logradouro',100)->nullable();       //  logradouro
            $table->string('oms_numero',10)->nullable();            //  nuemro da residencia
            $table->string('oms_complemento',100)->nullable();      //  complemento   
            $table->char('oms_status',1)->nullable();               //  status     
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
