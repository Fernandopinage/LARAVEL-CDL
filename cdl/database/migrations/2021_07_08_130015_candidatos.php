<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Candidatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            // candidato

        Schema::create('tbl_candidatos', function (Blueprint $table) {

              /*
              $table->string('can_descricao',100);        
              $table->string('can_leitura',100);          
              $table->string('can_escrita',100);          
              $table->string('can_conversacao',100);     
              
              faz relacionamento com tabela idioma o ID do candidato vira chave estrangeira no idioma

              */
            $table->increments('can_id');                     //  chave primaria auto incremento
            $table->string('can_nome')->nullable();                   //  nome do candidato
            $table->string('can_sobrenome')->nullable();              //  sobrenome
            $table->string('can_foto')->nullable();                   //  foto
            $table->string('can_cpf')->nullable(); 
            $table->string('can_rg')->nullable(); 
            $table->date('can_nascimento')->nullable(); 
            $table->string('can_localnascimento')->nullable(); 
            $table->string('can_cor')->nullable(); 
            $table->string('can_peso')->nullable(); 
            $table->string('can_altura')->nullable(); 
            $table->string('can_estadocivil')->nullable(); 
            $table->string('can_filhos')->nullable(); 
            $table->string('can_filiacao')->nullable(); 
            $table->string('can_genero')->nullable(); 
            $table->string('can_exmilitar')->nullable(); 
            $table->string('can_unidademilitar')->nullable(); 
            $table->string('can_matricula')->nullable(); 
            $table->string('can_email')->nullable(); 
            $table->string('can_senha')->nullable(); 
            $table->string('can_telefone')->nullable(); 
            $table->string('can_celular')->nullable(); 
            $table->string('can_cep')->nullable(); 
            $table->string('can_uf')->nullable(); 
            $table->string('can_cidade')->nullable(); 
            $table->string('can_bairro')->nullable(); 
            $table->string('can_numero')->nullable(); 
            $table->string('can_rua')->nullable(); 
            $table->string('can_complemento')->nullable(); 
            $table->string('can_formacao')->nullable(); 
            $table->string('can_instituicao')->nullable(); 
            $table->string('can_curso')->nullable(); 
            $table->string('can_termino')->nullable(); 
            $table->string('can_semestre')->nullable(); 
            $table->string('can_periodo')->nullable(); 
            /***************************** */
            $table->string('can_curso_extra')->nullable(); 
            $table->string('can_curso_ano_termino')->nullable(); 
            $table->string('can_curso_area_atuacao')->nullable(); 
            $table->string('can_utv_titlulo')->nullable(); 
            $table->string('can_utv_carga')->nullable(); 
            $table->string('can_utv_data')->nullable(); 
            $table->string('can_idioma')->nullable(); 
            $table->string('can_outro_idioma')->nullable(); 
            $table->string('can_idioma_escrita')->nullable(); 
            $table->string('can_idioma_leitura')->nullable(); 
            $table->string('can_idioma_conversacao')->nullable(); 
            $table->string('can_area_profissional')->nullable(); 
            $table->string('can_cargo_empresa')->nullable(); 
            $table->string('can_atual_empresa')->nullable(); 
            $table->string('can_data_inicio_empresa')->nullable(); 
            $table->string('can_data_termino_empresa')->nullable(); 
            $table->string('can_salario_empresa')->nullable(); 
            /***************************** */
            $table->string('can_tempoexperiencia')->nullable(); 
            $table->string('can_pretensao_salario')->nullable(); 
            $table->string('can_termo')->nullable(); 
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
