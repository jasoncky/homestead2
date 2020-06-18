<?php

namespace App\Observers;

use App\Appointment;
use Carbon\Carbon;

class RecurrenceObserver
{
    /**
     * Handle the event "created" event.
     *
     * @param  \App\Event  $event
     * @return void
     */
    public static function created(Appointment $appointment)
    {
        if(!$appointment->appointment()->exists())
        {
            $recurrences = [
                'daily'     => [
                    'times'     => 365,
                    'function'  => 'addDay'
                ],
                'weekly'    => [
                    'times'     => 52,
                    'function'  => 'addWeek'
                ],
                'monthly'    => [
                    'times'     => 12,
                    'function'  => 'addMonth'
                ]
            ];
            $startTime = Carbon::parse($appointment->start_time);
            $endTime = Carbon::parse($appointment->end_time);
            $recurrence = $recurrences[$appointment->recurrence] ?? null;

            if($recurrence)
                for($i = 0; $i < $recurrence['times']; $i++)
                {
                    $startTime->{$recurrence['function']}();
                    $endTime->{$recurrence['function']}();
                    $appointment->appointments()->create([
                        'name'          => $appointment->name,
                        'start_time'    => $startTime,
                        'end_time'      => $endTime,
                        'recurrence'    => $appointment->recurrence,
                    ]);
                }
        }
    }

    /**
     * Handle the event "updated" event.
     *
     * @param  \App\Event  $event
     * @return void
     */
    public function updated(Appointment $appointment)
    {
        if($appointment->appointments()->exists() || $appointment->appointment)
        {
            $startTime = Carbon::parse($appointment->getOriginal('start_time'))->diffInSeconds($appointment->start_time, false);
            $endTime = Carbon::parse($appointment->getOriginal('end_time'))->diffInSeconds($appointment->end_time, false);
            if($appointment->appointment)
                $childEvents = $appointment->appointment->appointments()->whereDate('start_time', '>', $appointment->getOriginal('start_time'))->get();
            else
                $childEvents = $appointment->appointments;

            foreach($childEvents as $childEvent)
            {
                if($startTime)
                    $childEvent->start_time = Carbon::parse($childEvent->start_time)->addSeconds($startTime);
                if($endTime)
                    $childEvent->end_time = Carbon::parse($childEvent->end_time)->addSeconds($endTime);
                if($appointment->isDirty('name') && $childEvent->name == $appointment->getOriginal('name'))
                    $childEvent->name = $appointment->name;
                $childEvent->saveQuietly();
            }
        }

        if($appointment->isDirty('recurrence') && $appointment->recurrence != 'none')
            self::created($appointment);
    }

    /**
     * Handle the event "deleted" event.
     *
     * @param  \App\Event  $event
     * @return void
     */
    public function deleted(Appointment $appointment)
    {
        if($appointment->appointments()->exists())
            $appointments = $appointment->appointments()->pluck('id');
        else if($appointment->appointment)
            $appointments = $appointment->appointment->appointments()->whereDate('start_time', '>', $appointment->start_time)->pluck('id');
        else
            $appointments = [];
        
            Appointment::whereIn('id', $appointments)->delete();
    }
}
