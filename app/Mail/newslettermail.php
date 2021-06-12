<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\newsletter;

class newslettermail extends Mailable
{
    use Queueable, SerializesModels;
    public $newsletter;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(newsletter $news)
    {
        //
        $this->newsletter = $news;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {  
        return $this->subject('Newsletter Subscription')
                ->view('emails.newsletter');
        
    }
}
