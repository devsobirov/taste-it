<?php

namespace App\Console\Commands;

use App\Notifications\FeedbackMessage;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

class SendTelegramMessage extends Command
{
    protected $iteration;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send_message';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Telegram test uchun';


    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        $message = [];
        $message['name'] = 'test';
        $message['email'] = 'test';
        $message['subject'] = 'test';
        $message['message'] = 'test';
        for ($i = 1; $i < 1000; $i++) {
            sleep(1);
            $message['message'] = $i;
            Notification::send(1189371511, new FeedbackMessage($message));
        }

        return $i;
    }
}
