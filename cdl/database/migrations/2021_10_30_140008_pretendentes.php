<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pretendentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pretendentes', function (Blueprint $table) {
            $table->increments('ptd_id');          //  id auto incremento primary key
            $table->string('ptd_id_candidato')->nullable();  
            $table->string('ptd_id_vaga')->nullable();   
            $table->string('ptd_id_empresa')->nullable();  
            $table->date('ptd_data');        
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
