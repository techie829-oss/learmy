<?php

namespace App\Mail;

use App\Models\Enquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserEnquiryAcknowledgement extends Mailable
{
    use Queueable, SerializesModels;

    public $enquiry;

    public function __construct(Enquiry $enquiry)
    {
        $this->enquiry = $enquiry;
    }

    public function build()
    {
        return $this->subject('Thank you for contacting Learmy Educoach')
                    ->view('emails.user_acknowledgement');
    }
}
