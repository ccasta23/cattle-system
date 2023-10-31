<?php

namespace App\Mail;

use App\Models\Cow;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CreateCowMail extends Mailable
{
    use Queueable, SerializesModels;

    private $cow;

    /**
     * Create a new message instance.
     */
    public function __construct(Cow $cow)
    {
        $this->cow = $cow;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Create Cow Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
        return $this->view( 'mail.createCow',
            [
                'cow' => $this->cow,
            ],
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
}
