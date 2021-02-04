<?php

namespace App\Notifications\Site;

use App\Models\ContactUs\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactUsNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $contactUsMessage;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Message $contactUsMessage)
    {
        $this->contactUsMessage = $contactUsMessage;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject($this->contactUsMessage->subject)
            //->from($this->contactUsMessage->email, $this->contactUsMessage->name)
            ->line($this->contactUsMessage->msg)
            ->line('this message sended from ' . $this->contactUsMessage->name);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
