<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preferencia extends Model
{
    use HasFactory;

            // definindo a tabela 
            protected $table = 'tbl_preferencias';

            //  definindo chave primaria
            protected $primaryKey = 'pre_id';



}
