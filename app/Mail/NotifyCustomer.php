<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotifyCustomer extends Mailable
{
    use Queueable, SerializesModels;

    public $userMessage, $messageSubject;

    public function __construct($userMessage,$messageSubject)
    {

        $this->userMessage = $userMessage;

        $this->messageSubject = $messageSubject;
    }

    
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->messageSubject,
        );
    }

    
    public function content(): Content
    {
        return new Content(
            view: 'emails.notification',
        );
    }

 
    public function attachments(): array
    {
        return [];
    }
}
