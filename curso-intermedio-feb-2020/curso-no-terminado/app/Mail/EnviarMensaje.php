<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnviarMensaje extends Mailable
{
    use Queueable, SerializesModels;

    // Variable que tendra el texto
    protected $asunto;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($asunto)
    {
       $this->asunto = $asunto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->asunto);
        return $this->view('emails.gmail')
           ->with([
                'asunto' => $this->asunto
            ]);
    }
}
