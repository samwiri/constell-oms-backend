<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendOtp extends Mailable
{
    use Queueable, SerializesModels;

    public $userMessage;

    public function __construct($userMessage)
    {
        $this->userMessage = $userMessage;
    }

   
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Otp',
        );
    }

   
    public function content(): Content
    {
        return new Content(
            view: 'emails.otp',
        );
    }

   
    public function attachments(): array
    {
        return [];
    }
}
