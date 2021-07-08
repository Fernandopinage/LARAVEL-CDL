<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Idioma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TB_IDIOMA', function (Blueprint $table) {


            //  faz relacionamento com candidado chave ID do candidando entra como chave estrangeira

            $table->increments('idi_id');
            $table->string('idi_descricao',100);        //  campo referente a linguagem
            $table->string('idi_leitura',100);          //  campo referente ao nivel de leitura    
            $table->string('idi_escrita',100);          //  campo referente ao nivel de escrita
            $table->string('idi_conversacao',100);      //  campo referente ao nivel de conversação
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
