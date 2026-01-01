<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class CargoDeclerationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $cargo;

    public function __construct($cargo)
    {
        $this->cargo = $cargo;
    }

   
   public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->cargo->location->name . ' - Cargo Declaration from ' . $this->cargo->user->name,
            replyTo: [
                new Address(
                    $this->cargo->user->email,
                    $this->cargo->user->name
                ),
            ],
        );
    }

   
    public function content(): Content
    {
        return new Content(
            view: 'emails.cargo_decleration',
        );
    }

   
    public function attachments(): array
    {
        return [];
    }
}
