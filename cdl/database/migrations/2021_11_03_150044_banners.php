<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Banners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_banners', function (Blueprint $table) {
            $table->increments('emp_id');
            $table->string('bnn_foto_principal')->nullable();
            $table->string('bnn_altura_principal')->nullable();
            $table->string('bnn_largura_principal')->nullable();
            $table->string('bnn_slide01_principal')->nullable();
            $table->string('bnn_altura_slide_principal')->nullable();
            $table->string('bnn_largura_slide_principal')->nullable();
            $table->string('bnn_slide02_principal')->nullable();
            $table->string('bnn_altura_slide2_principal')->nullable();
            $table->string('bnn_largura_slide2_principal')->nullable();
            $table->string('bnn_slide03_principal')->nullable();
            $table->string('bnn_altura_slide3_principal')->nullable();
            $table->string('bnn_largura_slide3_principal')->nullable();
            $table->string('bnn_foto_candidato')->nullable();
            $table->string('bnn_altura_candidato')->nullable();
            $table->string('bnn_largura_candidato')->nullable();
            $table->string('bnn_foto_empresa')->nullable();
            $table->string('bnn_altura_empresa')->nullable();
            $table->string('bnn_largura_empresa')->nullable();
            $table->string('bnn_foto_empresa_home')->nullable();
            $table->string('bnn_altura02_empresa')->nullable();
            $table->string('bnn_largura02_empresa')->nullable();
            $table->string('bnn_foto_oms')->nullable();
            $table->string('bnn_altura_oms')->nullable();
            $table->string('bnn_largura_oms')->nullable();
            $table->string('bnn_foto_slide_oms')->nullable();
            $table->string('bnn_altura01_oms')->nullable();
            $table->string('bnn_largura01_oms')->nullable();
            $table->string('bnn_foto_slide02_oms')->nullable();
            $table->string('bnn_altura02_oms')->nullable();
            $table->string('bnn_largura02_oms')->nullable();
            $table->string('bnn_foto_slide03_oms')->nullable();
            $table->string('bnn_altura03_oms')->nullable();
            $table->string('bnn_largura03_oms')->nullable();
            $table->string('bnn_foto_utv')->nullable();
            $table->string('bnn_altura_utv')->nullable();
            $table->string('bnn_largura_utv')->nullable();
            $table->string('bnn_foto_slide1_utv')->nullable();
            $table->string('bnn_altura1_sliede_utv')->nullable();
            $table->string('bnn_largura1_sliede_utv')->nullable();
            $table->string('bnn_foto2_slide_utv')->nullable();
            $table->string('bnn_altura2_sliede_utv')->nullable();
            $table->string('bnn_largura2_sliede_utv')->nullable();
            $table->string('bnn_foto3_slide_utv')->nullable();
            $table->string('bnn_altura3_sliede_utv')->nullable();
            $table->string('bnn_largura3_sliede_utv')->nullable();

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
