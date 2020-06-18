<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Notifications\AppointmentNotify;

trait AppointmentModelTrait
{
    public static function bootAppointmentModelTrait()
    {
		if (!app()->runningInConsole())
		{
			static::updated(function ($appointment) {
				
				$datechange = false;
				$venuechange = false;
				//Log::debug("Appointment status================".$appointment->status);
				if($appointment->status=="Approve")
				{
					//Log::debug("Appointment approve, sent email");
					$details = [
						'subject' => 'Appoitment start at '.$appointment->start_time,
						'start_time' => $appointment->start_time,
						'end_time' => $appointment->end_time,
						'venue' => $appointment->venue,
						'content' => 'Your had appointment with us, detail as following',
						'contact_person_name' => $appointment->employee->name,
						'contact_person_contact' => $appointment->employee->phone,
						'client_email' => $appointment->client->email
					];
					$appointment->notify(new AppointmentNotify($details));
				}
				else if ($appointment->status=="Cancel")
				{
					$details = [
						'subject' => 'Appoitment had been cancel',
						'start_time' => $appointment->start_time,
						'end_time' => $appointment->end_time,
						'venue' => $appointment->venue,
						'content' => 'Your appointment had been cancelled',
						'contact_person_name' => $appointment->employee->name,
						'contact_person_contact' => $appointment->employee->phone,
						'client_email' => $appointment->client->email
					];
					$appointment->notify(new AppointmentNotify($details));
				}
				
				if ($appointment->start_time != $appointment->getOriginal('start_time'))
				{
					$datechange = true;
				}
				
				if ($appointment->end_time != $appointment->getOriginal('end_time'))
				{
					$datechange = true;
				}
				
				if ($appointment->venue != $appointment->getOriginal('venue'))
				{
					$venuechange = true;
				}
				
				if ($datechange)
				{
					Log::debug($appointment->end_time."just updated to ".$appointment->getOriginal('end_time'));
				}
				
				if ($datechange || $venuechange)
				{
						$details = [
							'subject' => 'Appoitment had changed',
							'start_time' => $appointment->start_time,
							'end_time' => $appointment->end_time,
							'venue' => $appointment->venue,
							'content' => 'Your appointment had been changed, new detail as following',
							'contact_person_name' => $appointment->employee->name,
							'contact_person_contact' => $appointment->employee->phone,
							'client_email' => $appointment->client->email
						];
						$appointment->notify(new AppointmentNotify($details));
				}


						
				
			});
			
			static::deleted(function ($appointment) {
				
				$details = [
					'subject' => 'Appoitment had been cancel',
					'start_time' => $appointment->start_time,
					'end_time' => $appointment->end_time,
					'venue' => $appointment->venue,
					'content' => 'Your appointment had been cancelled',
					'contact_person_name' => $appointment->employee->name,
					'contact_person_contact' => $appointment->employee->phone,
					'client_email' => $appointment->client->email
				];
				$appointment->notify(new AppointmentNotify($details));
					
				
			});
		}
		
	}
}