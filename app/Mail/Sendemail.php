<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Mockery\Generator\StringManipulation\Pass\Pass;

class Sendemail extends Mailable
{
    use Queueable, SerializesModels;
    public $datos;
    public $view;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $datos, String $view)
    {
        $this->view = $view;
        $this->datos = $datos;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view($this->view);
    }
}
