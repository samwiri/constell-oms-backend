<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class AssistedShoppingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $assisted_shopping;

    public function __construct($assisted_shopping)
    {
        $this->assisted_shopping = $assisted_shopping;
    }

 
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Assisted Shopping request from '.$this->assisted_shopping->user->full_name,
            replyTo: [
                new Address(
                    $this->assisted_shopping->user->email,
                    $this->assisted_shopping->user->full_name
                ),
            ],
        );
    }

  
    public function content(): Content
    {
        return new Content(
            view: 'emails.assisted_shopping',
        );
    }

  
    public function attachments(): array
    {
        return [];
    }
}
