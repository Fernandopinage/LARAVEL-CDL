<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pretendente extends Model
{
    use HasFactory;

            // definindo a tabela 
            protected $table = 'TBL_PRETENDENTES';

            //  definindo chave primaria
            protected $primaryKey = 'ptd_id';
}
