<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Utv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // UTV unidade 

        Schema::create('TBL_UTV', function (Blueprint $table) {
            $table->increments('utv_id');          //  id auto incremento primary key
            $table->string('utv_unidade',100)->nullable();             // nome da unidade
            $table->string('utv_periodo',100)->nullable();              // campo onde fornece periodo exmplo: 15 as 18/06/2021
            $table->string('utv_telefone',20)->nullable();              // telefone da unidade
            $table->string('utv_telefone2',20)->nullable();              // telefone da unidade
            $table->string('utv_cep')->nullable();                    // cep (Obrigatorio)
            $table->string('utv_cidade',20)->nullable();                // cidade
            $table->string('utv_bairro',100)->nullable();               // bairro   
            $table->string('utv_logradouro',100)->nullable();           // logradouro
            $table->string('utv_numero',10)->nullable();                // nuemero da residencia
            $table->string('utv_complemento',100)->nullable();          // complemento   
            $table->string('utv_contato_tec',100)->nullable();          // contato do tecnico referente 
            $table->string('utv_email_tec',100)->nullable();            // email do tecnico referente 
            $table->string('utv_funcao_tec',100)->nullable();           // função do tecnico referente 
            $table->char('utv_status',1)->nullable();                   //  status da unidade 
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
