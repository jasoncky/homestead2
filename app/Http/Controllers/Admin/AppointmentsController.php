<?php

namespace App\Http\Controllers\Admin;

use App\Appointment;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAppointmentRequest;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AppointmentsController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Appointment::query()->select(sprintf('%s.*', (new Appointment)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'event_show';
                $editGate      = 'event_edit';
                $deleteGate    = 'event_delete';
                $crudRoutePart = 'appointments';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
			$table->editColumn('start_time', function ($row) {
				return $row->start_time ? $row->start_time : "";
			});
			$table->editColumn('end_time', function ($row) {
				return $row->end_time ? $row->end_time : "";
			});
			$table->editColumn('recurrence', function ($row) {
				return $row->recurrence ? $row->recurrence : "";
			});
			$table->editColumn('appointment', function ($row) {
				return $row->appointment ? $row->appointment : "";
			});
            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.appointments.index');
    }

    public function create()
    {
        abort_if(Gate::denies('event_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.appointments.create');
    }

    public function store(StoreAppointmentRequest $request)
    {
        Appointment::create($request->only('name', 'start_time', 'end_time','recurrence'));

        return redirect()->route('admin.systemCalendar');
    }

    public function edit(Appointment $appointment)
    {
        abort_if(Gate::denies('event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $appointment->load('appointment')
            ->loadCount('appointments');

        return view('admin.appointments.edit', compact('appointment'));
    }

    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        $appointment->update($request->only('name', 'start_time', 'end_time','recurrence'));

        return redirect()->route('admin.systemCalendar');
    }

    public function show(Appointment $appointment)
    {
        abort_if(Gate::denies('event_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $appointment->load('appointment');

        return view('admin.appointments.show', compact('appointment'));
    }

    public function destroy(Appointment $appointment)
    {
        abort_if(Gate::denies('event_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $appointment->delete();

        return back();
    }

    public function massDestroy(MassDestroyAppointmentRequest $request)
    {
        Appointment::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
	
	public function ajaxUpdate(Request $request)
	{
		$appointment = Appointment::findOrFail($request->id);
		//$appointment->update($request->all());
		$appointment->update($request->only('name', 'start_time', 'end_time','recurrence'));

		return response()->json(['appointments' => $appointment]);
	}
}