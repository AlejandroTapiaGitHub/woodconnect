<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SingInMailable extends Mailable
{
    use Queueable, SerializesModels;

    private $verifyCode;
    /**
     * Create a new message instance.
     */
    public function __construct($verifyCode)
    {
        $this->verifyCode = $verifyCode;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('woodconnect22@gmail.com', 'woodconnect'),
            subject: 'Account Verification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
        return $this->view('emails.verify')
                    ->with(['verifyCode' => $this->verifyCode]);
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
}
