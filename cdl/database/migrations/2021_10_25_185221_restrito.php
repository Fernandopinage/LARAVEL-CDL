<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Restrito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_restrito', function (Blueprint $table) {

            // faz relação com campo Área de Atuação cadastro de vagas e anuncio de vagas

            $table->increments('res_id');      // id auto increment
            $table->string('res_nome')->nullable();         
            $table->string('res_email')->nullable();  
            $table->string('res_senha')->nullable();            
            $table->string('res_perfil')->nullable();     
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
