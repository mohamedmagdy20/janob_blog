<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ChangePassword extends Mailable
{
    use Queueable, SerializesModels;
    public $email;
    public $code;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$code)
    {
        //
        $this->email = $email;
        $this->code = $code;
    }

    public function build()
    {
        return $this->subject('Thank you for subscribing to our newsletter')
        ->markdown('emails.subscribers',compact('email','code'));
    }

}
