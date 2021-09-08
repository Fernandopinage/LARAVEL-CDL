<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UTVCURSOS extends Model
{
    use HasFactory;
        
    //protected $fillable =['emp_id','emp_logo','emp_fantasia','emp_razao','emp_cnpj','emp_atividade','emp_telefone','emp_celular','emp_cep','emp_logrador','emp_numero','emp_bairro','emp_cidade','emp_uf','emp_nome_contato','emp_email_contato','emp_chack_assoc','emp_cod_assoc','emp_senha','emp_termo','emp_status','emp_email'];

    // definindo a tabela 
    protected $table = 'tbl_utvcurso';

    //  definindo chave primaria
    protected $primaryKey = 'utv_id';
}
