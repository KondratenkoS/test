<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RetirementNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    private string $message;

    /**
     * Create a new message instance.
     */
    public function __construct($message)
    {
        $this->message = $message;
    }


    public function build(): self
    {
        return $this->subject('Водій вийшов на пенсію')
            ->view('emails.retire', ['message' => $this->message]);
    }
}
