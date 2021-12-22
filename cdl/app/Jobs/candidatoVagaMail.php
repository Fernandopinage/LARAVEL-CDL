<?php

namespace App\Jobs;

use App\Mail\candidatoMail;
use App\Mail\candidatoVagaMail as MailCandidatoVagaMail;
use App\Models\Candidato;
use App\Models\Empresa;
use App\Models\Vagas;
use App\Models\Pretendente;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class candidatoVagaMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $candidato;
    private $empresa;
    private $vaga;


    public function __construct($candidato,$empresa,$vaga)
    {
        $this->candidato = $candidato;
        $this->empresa = $empresa;
        $this->vaga = $vaga;
    }

 

    public function handle()
    {

        $candidato = Candidato::find($this->candidato->can_id);
        $empresa = Empresa::find($this->empresa->emp_id);
        $vaga = Vagas::find($this->vaga->vag_id);


        Mail::to($candidato->can_email)->send(new MailCandidatoVagaMail($pretendente = Pretendente::where('ptd_id_candidato',  $candidato->can_id)->where('ptd_id_vaga',  $vaga->vag_id )->where('ptd_id_empresa', $empresa->emp_id)->first()));

        



    }
}
