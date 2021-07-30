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

        
}
