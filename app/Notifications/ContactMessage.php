<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;
use NotificationChannels\Telegram\TelegramChannel;

class ContactMessage extends Notification
{
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    public function toTelegram()
    {
         return TelegramMessage::create()
            ->to(70130832)
            ->content('Bye Bye');
    }

}
