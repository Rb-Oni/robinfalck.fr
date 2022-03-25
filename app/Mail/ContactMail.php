<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $object;
    public $mail;
    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $object, string $mail, string $msg)
    {
        $this->object = $object;
        $this->mail = $mail;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->object)
            ->from($this->mail)
            ->view('mail.mail');
    }
}
