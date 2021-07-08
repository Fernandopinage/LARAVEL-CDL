<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Experiencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            // exeperiencia

        Schema::create('TBL_EXEPERIENCIA', function (Blueprint $table) {
            $table->integer('exp_id')->unsigned();      //  chave primaria auto incremento
            $table->date('exp_data_inicio');            //  data de entrada na empresa
            $table->date('exp_data_final');             //  data de final na empresa
            $table->string('exp_empresa',100);          //  nome da empresa
            $table->string('exp_cargo',100);            //  tipo de  cargo    
            $table->longText('exp_descricao_cargo');    //  descricao do cargo
            $table->char('exp_empresa_atual',1);        //  checkbox perguntando se está na empresa atual
            $table->double('exp_salarial',8,2);         //  valor do salario
            $table->char('exp_militar',1);              //  ex militar
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
