<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                    // tabela empresa 

        Schema::create('tbl_empresas', function (Blueprint $table) {  // TBL_EMPRESAS
            $table->increments('emp_id');
            $table->string('emp_logo',255)->nullable();             // logo da empresa 
            $table->string('emp_fantasia',50)->nullable();          // nome fantasia da empresa
            $table->string('emp_email',100)->nullable();            // email da empresa (Obrigadorio)
            $table->string('emp_razao',100)->nullable();            // razao da empresa (obrigatorio)
            $table->string('emp_cnpj',20)->nullable()->unique();    // cnpj da empresa (obrigatorio)
            $table->string('emp_atividade',100)->nullable();        // Área de atividade (obrigatorio)
            $table->string('emp_telefone',20)->nullable();          // Telefone da empresa
            $table->string('emp_celular',20)->nullable();           // Celular da empresa
            $table->string('emp_cep')->nullable();                // CEP da empresa[autocompletar endereço pelo CEP] (obrigatorio)
            $table->string('emp_logrador',100)->nullable();         // Logradouro
            $table->string('emp_numero',10)->nullable();            // Nº endereço da empresa 
            $table->string('emp_bairro',100)->nullable();           // Bairro da empresa
            $table->string('emp_cidade',30)->nullable();           // Cidade da empresa
            $table->string('emp_uf',2)->nullable();                 // UF da empresa 
            $table->string('emp_complemento',200)->nullable();      //  complemento 
            $table->string('emp_nome_contato',100)->nullable();     // Nome do contato da empresa (obrigatorio)
            $table->string('emp_email_contato',100)->nullable();    // email do contato da empresa (obrigatorio)
            $table->string('emp_funcao',100)->nullable();           // chave estrangeira  de função/cargo
            $table->string('emp_setor',100)->nullable();            // chave estrangeira  de setor/departamento
            $table->char('emp_chack_assoc',1)->nullable();          // Associado CDL manaus? campo check | caso check aparecer campo para preencher codigo
            $table->string('emp_cod_assoc',20)->nullable();         // campo para preencher codigo caso check box seja preenchido 
            $table->string('emp_senha',255)->nullable();             // definir a senha de acesso (obrigatorio)
            $table->char('emp_termo',5)->nullable();                // check com politica de termo de dados do site. (obrigatorio)
            $table->char('emp_status',1)->nullable();               // status ativo ou inativo. (obrigatorio)
            $table->char('emp_desativar',1)->nullable();            //  desativar conta 
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
