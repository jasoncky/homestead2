<?php

namespace App\Console\Commands;

use App\Appointment;
use App\Notifications\AppointmentReminderNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

class SendRemindersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminders:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends reminders to Clients';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $count = 0;
        $times = [
            now('Asia/Kuala Lumpur')->subDay(),
            now('Asia/Kuala Lumpur')->addDay()
        ];
        $appointments = Appointment::with('clients')
            ->whereHas('clients')
            ->whereBetween('start_time', $times)
            ->get();


        foreach ($appointments as $appointment) {
            if (
                now($appointment->timezone)->diffInMinutes($appointment->start_time, false) > 0 &&
                now($appointment->timezone)->diffInMinutes($appointment->start_time, false) <= 60
            ) {
                Notification::send($appointment->clients, new AppointmentReminderNotification($appointment));
                $count++;
            }
        }

        $this->info("Appointment reminders of " . $count . " appointments has been sent successfully");
    }
}