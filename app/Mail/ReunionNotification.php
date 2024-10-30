<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReunionNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $reunion;

    public function __construct($reunion)
    {
        $this->reunion = $reunion;
    }

    public function build()
    {
        return $this->subject("Meeting notification")
                    ->view('emails.reunion_notification')
                    ->with(['reunion' => $this->reunion]);
    }
}
