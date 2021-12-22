<?php

namespace App\Mail;


use App\Models\Candidato;
use App\Models\Empresa;
use App\Models\Vagas;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class empresaVagaMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->inputs = $inputs;
    }

    
    public function build()
    {


        $candidato = Candidato::find($this->inputs->ptd_id_candidato);
        $vaga = Vagas::find($this->inputs->ptd_id_vaga);
        $empresa = Empresa::find($this->inputs->ptd_id_empresa);

        //ddd($this->inputs);
        //ddd($candidato);
        $this->inputs->can_email = $candidato->can_email;
        $this->inputs->can_nome = $candidato->can_nome;
        $this->inputs->can_cidade = $candidato->can_cidade;
        $this->inputs->can_bairro = $candidato->can_bairro;
        $this->inputs->can_rua = $candidato->can_rua;
        $this->inputs->can_complemento = $candidato->can_complemento;
        $this->inputs->can_celular = $candidato->can_celular;
        $this->inputs->can_telefone = $candidato->can_telefone;
        $this->inputs->can_formacao = $candidato->can_formacao;
        $this->inputs->can_complemento = $candidato->can_complemento;
        //$this->inputs->can_exmilitar = $candidato->can_exmilitar;
        //$this->inputs->can_utv_titlulo = $candidato->can_utv_titlulo;

        //ddd($vaga);
        $this->inputs->vag_cargo = $vaga->vag_cargo;
        //ddd($empresa);


        $this->subject('Uma nova candidatura a vaga <b>'.$this->inputs->vag_cargo.'</b>');
        $this->to($this->inputs->can_email , $this->inputs->can_nome, $this->inputs->vag_cargo,
        $this->inputs->can_cidade, $this->inputs->can_bairro,$this->inputs->can_rua,$this->inputs->can_complemento,
        $this->inputs->can_formacao,$this->inputs->can_complemento);


        return $this->markdown('mailEmpresa.empresaVagaMail',[

            'inputs' => $this->inputs

        ]);
        
    }
}
