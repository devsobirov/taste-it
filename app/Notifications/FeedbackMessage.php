<?php

namespace App\Notifications;

use NotificationChannels\Telegram\TelegramMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;

class FeedbackMessage extends Notification
{
    protected $data;

   public function __construct($message)
   {
       $this->data = $message;
   }
    public function via($notifiable)
    {
        return ['telegram'];
    }

    public function toTelegram($telegramId)
    {
        return TelegramMessage::create()
            ->to($telegramId)
            ->content(
              "*Yuboruvchi*: {$this->data['name']} \n".
              "*Email:* {$this->data['email']} \n".
              "*Mavzusi:* {$this->data['subject']} \n".
              "*Xabar: *" .$this->data['message']
            );
    }

}
