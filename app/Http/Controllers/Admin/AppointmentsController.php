<?php

namespace App\Http\Controllers\Admin;

use App\Appointment;
use App\Client;
use App\Employee;
use App\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAppointmentRequest;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use App\Notifications\AppointmentNotify;
use Illuminate\Support\Facades\Log;

class AppointmentsController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Appointment::with(['client', 'employee', 'services'])->select(sprintf('%s.*', (new Appointment)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
			$table->addColumn('extaactioncolumn', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');
			
			$table->editColumn('extaactioncolumn', function ($row) {
				return view('partials.rowsappointment', compact('row'));
			});
			
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
			 $table->addColumn('client_name', function ($row) {
                return $row->client ? $row->client->name : '';
            });

            $table->addColumn('employee_name', function ($row) {
                return $row->employee ? $row->employee->name : '';
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : "";
            });
			$table->editColumn('services', function ($row) {
                $labels = [];

                foreach ($row->services as $service) {
                    $labels[] = sprintf('<span class="label label-info label-many">%s</span>', $service->name);
                }

                return implode(' ', $labels);
            });
            $table->rawColumns(['actions', 'placeholder', 'client', 'employee', 'services']);
			return $table->make(true);
        }

        return view('admin.appointments.index');
    }

    public function create()
    {
        abort_if(Gate::denies('event_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
		
		$clients = Client::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = Employee::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $services = Service::all()->pluck('name', 'id');
		
        return view('admin.appointments.create', compact('clients', 'employees', 'services'));
    }

    public function store(StoreAppointmentRequest $request)
    {
        $appointment = Appointment::create($request->only('name', 'start_time', 'end_time','recurrence','client_id','employee_id','venue','description','status'));
		
		if ($request->input('services'))
		{
			$appointment->services()->sync($request->input('services', []));
		}
		return redirect()->route('admin.systemCalendar');
    }

    public function edit(Appointment $appointment)
    {
        abort_if(Gate::denies('event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
		$clients = Client::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $employees = Employee::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $services = Service::all()->pluck('name', 'id');
		$appointment->load('client', 'employee', 'services');
        $appointment->load('appointment')->loadCount('appointments');
        return view('admin.appointments.edit', compact('appointment', 'employees', 'services', 'appointment','clients'));
    }

    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
		$appointment->update($request->only('name', 'start_time', 'end_time','recurrence','client_id','employee_id','venue','description','status'));
		$appointment->services()->sync($request->input('services', []));
        return redirect()->route('admin.appointments.index');
    }

    public function show(Appointment $appointment)
    {
        abort_if(Gate::denies('event_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
		$appointment->load('appointment','client', 'employee', 'services');
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
	
	public function updateStatus(Request $request)
	{
		abort_if(Gate::denies('event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
		/*
		$updated = Appointment::where('id', request('id'))
			->update([
				'status' => request('status')
        ]);
		if($updated) {
			// returns true
			return response()->json(['message' => 'success'], 200); 
		}
		else {
			// returns false
			return response()->json(['message' => 'fail'], 200); 
		}*/
		$appointment = Appointment::find(request('id'));
		$appointment->status = request('status');
		$is_saved = $appointment->save();
		
		if(!$is_saved){
			return response()->json(['message' => 'fail'], 200); 
		}
		else{
			return response()->json(['message' => 'success'], 200); 
		}
		
	}
	
	public function ajaxUpdate(Request $request)
	{
		$appointment = Appointment::findOrFail($request->id);
		//$appointment->update($request->all());
		$appointment->update($request->only('name', 'start_time', 'end_time','recurrence'));

		return response()->json(['appointments' => $appointment]);
	}
}