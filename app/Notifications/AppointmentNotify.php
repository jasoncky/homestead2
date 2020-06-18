<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AppointmentNotify extends Notification
{
	use Queueable;
	
	 private $details;
    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public function __construct($details)
    {
        $this->details = $details;
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
        $notifiable->email = $this->details['client_email'];
		
		return (new MailMessage)
            ->subject('Notification : '.$this->details['subject'])
			->line($this->details['content'])
			->line('Date Start : '.$this->details['start_time'])
			->line('Date End : '.$this->details['end_time'])
			->line('Venue : '.$this->details['venue'])
			->line('Staff Name : '.$this->details['contact_person_name'])
			->line('Staff Contact : '.$this->details['contact_person_contact']);
			
    }
}