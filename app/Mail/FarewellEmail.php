<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FarewellEmail extends Mailable
{
    use Queueable, SerializesModels;

    private string $name;

    /**
     * Create a new message instance.
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function build(): self
    {
        return $this->subject('Дякуємо за роботу в АТП')
                    ->view('emails.farewell', ['name' => $this->name]);
    }
}
