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
            $table->string('emp_logo')->nullable();             // logo da empresa 
            $table->string('emp_fantasia')->nullable();          // nome fantasia da empresa
            $table->string('emp_email')->nullable();            // email da empresa (Obrigadorio)
            $table->string('emp_razao')->nullable();            // razao da empresa (obrigatorio)
            $table->string('emp_cnpj')->nullable()->unique();    // cnpj da empresa (obrigatorio)
            $table->string('emp_atividade')->nullable();        // Área de atividade (obrigatorio)
            $table->string('emp_telefone')->nullable();          // Telefone da empresa
            $table->string('emp_celular')->nullable();           // Celular da empresa
            $table->string('emp_cep')->nullable();                // CEP da empresa[autocompletar endereço pelo CEP] (obrigatorio)
            $table->string('emp_logrador')->nullable();         // Logradouro
            $table->string('emp_numero')->nullable();            // Nº endereço da empresa 
            $table->string('emp_bairro')->nullable();           // Bairro da empresa
            $table->string('emp_cidade')->nullable();           // Cidade da empresa
            $table->string('emp_uf')->nullable();                 // UF da empresa 
            $table->string('emp_complemento')->nullable();      //  complemento 
            $table->string('emp_nome_contato')->nullable();     // Nome do contato da empresa (obrigatorio)
            $table->string('emp_email_contato')->nullable();    // email do contato da empresa (obrigatorio)
            $table->string('emp_funcao')->nullable();           // chave estrangeira  de função/cargo
            $table->string('emp_setor')->nullable();            // chave estrangeira  de setor/departamento
            $table->char('emp_chack_assoc')->nullable();          // Associado CDL manaus? campo check | caso check aparecer campo para preencher codigo
            $table->string('emp_cod_assoc')->nullable();         // campo para preencher codigo caso check box seja preenchido 
            $table->string('emp_senha')->nullable();             // definir a senha de acesso (obrigatorio)
            $table->char('emp_termo')->nullable();                // check com politica de termo de dados do site. (obrigatorio)
            $table->char('emp_status')->nullable();               // status ativo ou inativo. (obrigatorio)
            $table->char('emp_desativar')->nullable();            //  desativar conta 
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
