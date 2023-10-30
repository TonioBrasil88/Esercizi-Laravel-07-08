<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;


    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('amministrazione@gmail.com', 'Amministratore'),
            subject: 'Confirmation Email from Movie.com',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.confirmation',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    } 

    public function build()
    {
        return $this->from('theemail@gmail.com', 'Me')
            ->to('admin@admin.com', 'Your mail')
            ->view('emails.myemailview')
            ->with([
                'email' => $this->email
            ]);
    }
}

