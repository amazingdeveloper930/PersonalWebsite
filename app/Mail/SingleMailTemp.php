<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\Config\Config;

class SingleMailTemp extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $subject_text;
    public $tpl_plain;
    public $email;
    public $name;
    public function __construct($subject_text, $tpl_plain, $from_email = NULL, $from_name = NULL)
    {
        //
        $this -> subject_text = $subject_text;
        $this -> tpl_plain = $tpl_plain;
        if($from_email != NULL)
            {
                $this -> email = $from_email;
            }
            else{
                $this -> email = env('MAIL_FROM_ADDRESS');
            }

        if($from_name != NULL)
            {
                $this -> name = $from_name;
            }
            else{
                $this -> name = env('MAIL_FROM_NAME');
            }
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this -> email, $this -> name)
                    ->subject($this -> subject_text)
                    
                    ->markdown('mail.email');
    }
}
