<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SoftwareStatusNotification extends Notification
{
     use Queueable;

    protected $status;
    protected $productName;

    public function __construct($status, $productName)
    {
        $this->status = $status;
        $this->productName = $productName;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'message' => "Your software '{$this->productName}' has been {$this->status}.",
        ];
    }
}