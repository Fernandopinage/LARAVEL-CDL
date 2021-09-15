<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class utvcursoMail extends Mailable
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
        $this->subject('Sua senha foi redefinida');
        $this->to($this->inputs->utv_email , $this->inputs->utv_unidade);


        
       return $this->markdown('mailEmpresa.utvcursoMail',[

            'inputs' => $this->inputs

        ]);
    }
}
