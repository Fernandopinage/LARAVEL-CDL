<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Extracurriculares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //extracurriculares

        Schema::create('TBL_EXTRACURRICULAR', function (Blueprint $table) {
            $table->integer('ext_id')->unsigned();      //  chave primaria auto incremento
            $table->string('ext_instituicao',100);      //  nome da instituição
            $table->string('ext_curso',100);            //  nome do curso
            $table->date('ext_emissao',100);            //  data de emissao
            $table->string('ext_area_atuacao',60);      //  area de atuação // desenvolvedor // financeiro
            $table->integer('ext_carga_hora',3);      // carga horaria
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
