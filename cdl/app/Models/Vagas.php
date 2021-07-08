<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vagas extends Model
{
    use HasFactory;

        // definindo a tabela 
        protected $table = 'TBL_VAGAS';

        //  definindo chave primaria
        protected $primaryKey = 'vag_id';


        
        protected $casts = [
            'vag_idioma' => 'array',
        ];

}
