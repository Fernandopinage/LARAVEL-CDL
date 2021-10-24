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
            $table->string('vag_cargo')->nullable();            // cargo ou função da vaga 
            $table->longText('vag_descricao')->nullable();      // descrição da vaga 
            $table->string('vag_tipo')->nullable();             // tipo de vaga se é temporario ,menor aprediz, estágio ou trainee
            $table->string('vag_salario')->nullable();          // salario  da vaga
            $table->string('vag_formacao')->nullable();          // possui formação necessaria [ensino fundamental completo]
            $table->string('vag_curso')->nullable();             // nome do curso 
            $table->string('vag_termino')->nullable();           // termino do curso
            $table->string('vag_semestre')->nullable();          // Semestre do curso 
            $table->string('vag_periodo')->nullable();           // periodo do curso
            $table->char('vag_experiencia')->nullable();         // Possui experiencia ?  [com experiencia ] [sem experiencia]   
            $table->string('vag_tempo')->nullable();             // tempo de experiencia [3 meses ] [6 meses] [1 ano ] ..etc
            $table->string('vag_uf')->nullable();                 // uf da vaga (obrigatorio)
            $table->string('vag_cidade')->nullable();           // cidade da vaga (obrigatorio)
            $table->string('vag_bairro')->nullable();           // bairro da vaga 
            $table->char('vag_opcao')->nullable();              // opão para vaga é remoto       
            $table->char('vag_oculta')->nullable();               // ocultar empresa  (obrigatprio)     
            $table->char('vag_idioma_necessario')->nullable();    //  Campo responsavel por pergunta se necessario o idioma CAMPO FORMATO SELECT              
            $table->string('vag_idioma')->nullable();           //  Campo referente se escrita do candidato
            $table->string('vag_idioma_nivel')->nullable();      // nivel do idioma
            $table->string('vag_idioma_outro')->nullable();     //  outro idiomas
            $table->char('vag_pcd')->nullable();                  // se possui deficiencia 
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
