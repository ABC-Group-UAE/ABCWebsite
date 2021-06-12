<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\career;
class careerMail extends Mailable
{
    use Queueable, SerializesModels;
    public $career;
    public $path;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(career $career,$path)
    {
        //
        $this->career= $career;
        $this->path= $path;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {    
        // return $this->to('aishamnoushad@gmail.com', 'aisha m noushad')
        //             ->bcc('another@another.com')
        //             ->subject('mail from website')
        //             ->markdown('emails.career');

        // ->attach($this->career->resume->getRealPath(),[
        //     'as' => $this->career->resume->getClientOrginalName()
        // ]);

        return $this->subject('Job Application from ABC Group UAE Website')
                ->view('emails.career')
                ->attach($this->path);
        
    }
}
