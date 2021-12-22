<?php

namespace App\Mail;

use App\Models\Candidato;
use App\Models\Empresa;
use App\Models\Vagas;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class candidatoVagaMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $inputs;

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
        //ddd($vaga);
        $this->inputs->vag_cargo = $vaga->vag_cargo;
        //ddd($empresa);

        
  
        
        $this->subject('Sua candidatura para à vaga <b>'.$this->inputs->vag_cargo.'</b> foi realizada com sucesso Candida');
        $this->to($this->inputs->can_email , $this->inputs->can_nome, $this->inputs->vag_cargo);


     
        return $this->markdown('mailEmpresa.candidatoVagaMail',[

            'inputs' => $this->inputs

        ]);
        
        
    }
}
