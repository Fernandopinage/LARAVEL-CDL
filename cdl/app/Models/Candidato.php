<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

        // definindo a tabela 
        protected $table = 'tbl_candidatos';

        //  definindo chave primaria
        protected $primaryKey = 'can_id';

        // definir um array

        protected $casts = [
            'can_curso_extra' => 'array',
            'can_curso_ano_termino' => 'array',
            'can_curso_area_atuacao' => 'array',
            'can_utv_titlulo' => 'array',
            'can_utv_carga' => 'array',
            'can_utv_data' => 'array',
            'can_utv_area_atuacao' => 'array',
            'can_idioma' => 'array',
            'can_outro_idioma' => 'array',
            'can_idioma_escrita' => 'array',
            'can_idioma_leitura' => 'array',
            'can_idioma_conversacao' => 'array',
            'can_area_profissional' => 'array',
            'can_nome_empresa' => 'array',
            'can_cargo_empresa' => 'array',
            'can_atual_empresa' => 'array',
            'can_data_inicio_empresa' => 'array',
            'can_data_termino_empresa' => 'array',
            'can_salario_empresa' => 'array',
            'can_software_empresa' => 'array',
            'can_tempoexperiencia' => 'array',
            
            

        ];

        
}
