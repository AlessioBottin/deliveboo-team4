<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewOrderRestaurantNotification extends Mailable
{
    use Queueable, SerializesModels;
    
    public $new_order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($_new_order)
    {
        $this->new_order = $_new_order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = [
            'new_order' => $this->new_order
        ];

        return $this->view('mails.new-order-restaurant-notification', $data);
    }
}
