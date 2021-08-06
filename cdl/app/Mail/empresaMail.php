<?php

namespace App\Mail;

use App\Models\Empresa;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class empresaMail extends Mailable
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
      
        $this->subject(subject:'Sua senha foi redefinida');
        $this->to(address: $this->inputs->emp_email ,name: $this->inputs->emp_fantasia);


        
       return $this->markdown('mailEmpresa.empresaMail',[

            'inputs' => $this->inputs

        ]);
      
    }
}
