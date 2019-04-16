<?php


namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $message;

    /**
     * Create a new message instance.
     *
     * @param $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'Pesan Kontak Baru';

        $data = [
            'name'      => $this->message->name,
            'email'     => $this->message->email,
            'phone'     => $this->message->phone ?? '-',
            'address'   => $this->message->address ?? '-',
            'content'   => $this->message->message
        ];

        return $this->from('info@31sudirmansuites.com')
            ->subject($subject)
            ->view('email.contact-message')
            ->with($data);

    }
}