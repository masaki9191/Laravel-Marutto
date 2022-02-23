<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SmsNotification extends Notification
{
   
    // omitted


    public function via($notifiable) { 
        return ['nexmo'];     
    }

    public function toNexmo($notifiable) 
    { 
        return (new NexmoMessage())->content('Hello! SMS sending test.')->Unicode();     
    }

    // Omitted below 
   
}
