<?php

namespace App\Notifications;

use App\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EventReminderNotification extends Notification
{
    use Queueable;

    private $appointment;

    /**
     * Create a new notification instance.
     *
     * @param $appointment
     * @return void
     */
    public function __construct($appointment)
    {
        $this->appointment = $appointment;
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
     * @return MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Appointment Reminder')
                    ->line('An appointment is scheduled for you in less than an hour')
                    ->line('Title: ' . $this->appointment->name)
                    ->line('Start Time: ' . $this->appointment->start_time . ' (' . $this->appointment->timezone . ')');
    }
}