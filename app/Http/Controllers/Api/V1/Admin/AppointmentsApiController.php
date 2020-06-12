<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Appointment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Http\Resources\Admin\EventResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AppointmentsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('event_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
		return new AppointmentResource(Appointment::with(['appointment','client', 'employee', 'services'])->get());
    }

    public function store(StoreAppointmentRequest $request)
    {
        $appointment = Appointment::create($request->only('name', 'start_time', 'end_time','recurrence'));
		$appointment->services()->sync($request->input('services', []));
        return (new AppointmentResource($appointment))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Appointment $event)
    {
        abort_if(Gate::denies('event_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AppointmentResource($appointment->load(['appointment','client', 'employee', 'services']));
    }

    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        //$event->update($request->all());
		$appointment->update($request->only('name', 'start_time', 'end_time','recurrence'));
		$appointment->services()->sync($request->input('services', []));
        return (new AppointmentResource($appointment))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Appointment $appointment)
    {
        abort_if(Gate::denies('event_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $appointment->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
