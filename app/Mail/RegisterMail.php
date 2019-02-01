<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username)
    {

        $this->username=$username;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $username=$this->username;
        return $this->view('mail',compact('username'));
    }
}