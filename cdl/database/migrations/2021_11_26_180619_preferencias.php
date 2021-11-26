<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Preferencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('tbl_preferencias', function (Blueprint $table) {  // TBL_EMPRESAS
            $table->increments('pre_id');
            $table->string('pre_preferencia')->nullable();             // logo da empresa 
            $table->string('pre_descricao')->nullable();          // nome fantasia da empresa
           
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
