<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UtvCursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('tbl_utvcurso', function (Blueprint $table) {
            
            $table->integer('utv_id')->unsigned();              //  id auto incremento
            $table->string('utv_folder',250);                     //  folder do curso
            $table->string('utv_titulo',100);                   // titulo do curso 
            $table->string('utv_desc',255);                     // descrição do curso 
            $table->string('utv_carga_hora',3);                 // carga hora 
            $table->date('utv_data_inicio');                    // data de inicio do curso
            $table->date('utv_data_final');                     // data de final do curso
            $table->double('utv_valor_geral');                  // campo para informa o valor do curso para publico em geral
            $table->double('utv_valor_estudante');              // campo para informa o valor do curso para estudante
            $table->double('utv_valor_associado');              // campo para informa o valor do curso para associados
            $table->string('utv_informacoes');                  // informações do curso 
            $table->timestamps();
        });
    }
 
    
    public function down()
    {
        //
    }
}
