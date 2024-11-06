<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendContactForm extends Notification
{
    use Queueable;
    public $data;

    /**
     * Create a new notification instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('New Enquiry From :'.$this->data['name'])
                    ->line('You Have Received New Enquiry')
                    ->line('Name :'.$this->data['name'])
                    ->line('Email :'.$this->data['email'])
                    ->line('Contact Number :'.$this->data['mobile'])
                    ->line('Travel Date From :'.$this->data['f_date'])
                    ->line('Travel Date To :'.$this->data['t_date'])
                    ->line('Event Type :'.$this->data['carrier'])
                    ->line('Desination From :'.$this->data['from'])
                    ->line('Destination to :'.$this->data['fromto'])
                    ->line('Message :'.$this->data['message'])

                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
