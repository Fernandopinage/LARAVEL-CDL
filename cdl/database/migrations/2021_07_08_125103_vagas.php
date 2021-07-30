<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vagas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                    // Anuncio de Vagas 

        Schema::create('tbl_vagas', function (Blueprint $table) {
            $table->increments('vag_id');      // id auto increment
            $table->date('vag_data_inicio')->nullable();            // data de inicio da publicação vaga
            $table->date('vag_data_final')->nullable();             // data final da publicação vaga  
            $table->string('vag_cargo',100)->nullable();            // cargo ou função da vaga 
            $table->longText('vag_descricao')->nullable();      // descrição da vaga 
            $table->string('vag_tipo',100)->nullable();             // tipo de vaga se é temporario ,menor aprediz, estágio ou trainee
            $table->string('vag_salario',100)->nullable();          // salario  da vaga
            $table->string('vag_formacao',50)->nullable();          // possui formação necessaria [ensino fundamental completo]
            $table->string('vag_curso',50)->nullable();             // nome do curso 
            $table->string('vag_termino',50)->nullable();           // termino do curso
            $table->string('vag_semestre',50)->nullable();          // Semestre do curso 
            $table->string('vag_periodo',50)->nullable();           // periodo do curso
            $table->char('vag_experiencia',50)->nullable();         // Possui experiencia ?  [com experiencia ] [sem experiencia]   
            $table->string('vag_tempo',10)->nullable();             // tempo de experiencia [3 meses ] [6 meses] [1 ano ] ..etc
            $table->string('vag_uf',2)->nullable();                 // uf da vaga (obrigatorio)
            $table->string('vag_cidade',100)->nullable();           // cidade da vaga (obrigatorio)
            $table->string('vag_bairro',100)->nullable();           // bairro da vaga 
            $table->char('vag_opcao',100)->nullable();              // opão para vaga é remoto       
            $table->char('vag_oculta',1)->nullable();               // ocultar empresa  (obrigatprio)     
            $table->char('vag_idioma_necessario',1)->nullable();    //  Campo responsavel por pergunta se necessario o idioma CAMPO FORMATO SELECT              
            $table->string('vag_idioma',100)->nullable();           //  Campo referente se escrita do candidato
            $table->string('vag_idioma_nivel',20)->nullable();      // nivel do idioma
            $table->string('vag_idioma_outro',100)->nullable();     //  outro idiomas
            $table->char('vag_pcd',1)->nullable();                  // se possui deficiencia 
            $table->longText('vag_pcd_descricao')->nullable();      // caso possua deficiencia campo para descrever       
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
