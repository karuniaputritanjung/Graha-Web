<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BuktiCheckout extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $notaris;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $notaris)
    {
        //
        $this->data = $data;
        $this->notaris = $notaris;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Bukti Pembelian')
            ->view('email.bukti');
    }
}
