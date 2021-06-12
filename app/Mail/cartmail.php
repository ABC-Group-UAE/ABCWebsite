<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\contact;
class cartmail extends Mailable
{
    use Queueable, SerializesModels;
    public $contact, $products;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(contact $contact,$products)
    {
        //
        $this->contact= $contact;
        $this->products= $products;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Product Enquiry From ABC Group UAE Website')
                ->view('emails.cartlist');
    }
}
