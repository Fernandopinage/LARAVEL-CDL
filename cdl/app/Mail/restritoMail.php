<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class restritoMail extends Mailable
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

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        // definir parametros do e-mail
      
        $this->subject('Sua senha foi redefinida');
        $this->to($this->inputs->res_email , $this->inputs->res_nome);


        
       return $this->markdown('mailEmpresa.restritoMail',[

            'inputs' => $this->inputs

        ]);
      
    }
}
