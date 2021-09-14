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
            
            $table->increments('utvcurso_id');              //  id auto incremento
            $table->string('utvcurso_folder',250)->nullable();                     //  folder do curso
            $table->string('utvcurso_titulo',100)->nullable();                   // titulo do curso 
            $table->string('utvcurso_desc',255)->nullable();                     // descrição do curso 
            $table->timeTz('utvcurso_hora_inicio')->nullable();                 // carga hora 
            $table->timeTz('utvcurso_hora_fim')->nullable();                 // carga hora 
            $table->date('utvcurso_data_inicio')->nullable();                    // data de inicio do curso
            $table->date('utvcurso_data_final')->nullable();                     // data de final do curso
            $table->string('utvcurso_valor_geral')->nullable();                  // campo para informa o valor do curso para publico em geral
            $table->string('utvcurso_valor_estudante')->nullable();              // campo para informa o valor do curso para estudante
            $table->string('utvcurso_informacoes')->nullable();                  // informações do curso 
            $table->timestamps();
        });
    }
 
    
    public function down()
    {
        //
    }
}
