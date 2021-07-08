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
            $table->integer('utv_id')->unsigned();          //  id auto incremento primary key
            $table->string('utv_unidade',100);              // nome da unidade
            $table->string('utv_periodo',100);              // campo onde fornece periodo exmplo: 15 as 18/06/2021
            $table->string('utv_telefone',14);              // telefone da unidade
            $table->string('utv_cep',8);                    // cep (Obrigatorio)
            $table->string('utv_cidade',20);                // cidade
            $table->string('utv_bairro',100);               // bairro   
            $table->string('utv_logradouro',100);           // logradouro
            $table->string('utv_numero',10);                // nuemero da residencia
            $table->string('utv_complemento',100);          // complemento   
            $table->string('utv_contato_tec',100);          // contato do tecnico referente 
            $table->string('utv_email_tec',100);            // email do tecnico referente 
            $table->string('utv_funcao_tec',100);           // função do tecnico referente 
            $table->char('utv_status',1);                   //  status da unidade 
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
