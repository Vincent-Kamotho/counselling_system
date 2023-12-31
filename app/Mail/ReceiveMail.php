<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReceiveMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public $name;
    public $email;
    public $subject;
    public $message;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;   

        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->subject = $data['subject'];
        $this->message = $data['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Contact Message')
            ->from($this->email)
            ->to('vinsentwambugu@gmail.com')
            ->view('mail.receivemail');
    }
}
