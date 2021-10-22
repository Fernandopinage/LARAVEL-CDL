<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class candidatoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $inputs;

    public function __construct($inputs)
    {
        $this->inputs = $inputs;
    }

  
    public function build()
    {

        // definir parametros do e-mail
      
        $this->subject('Sua senha foi redefinida');
        $this->to($this->inputs->can_email , $this->inputs->can_nome);

      
        return $this->markdown('mailEmpresa.candidatoMail',[

            'inputs' => $this->inputs

        ]);
    }
}
