@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.appointment.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.appointment.fields.id') }}
                        </th>
                        <td>
                            {{ $appointment->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appointment.fields.name') }}
                        </th>
                        <td>
                            {{ $appointment->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appointment.fields.start_time') }}
                        </th>
                        <td>
                            {{ $appointment->start_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appointment.fields.end_time') }}
                        </th>
                        <td>
                            {{ $appointment->end_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appointment.fields.recurrence') }}
                        </th>
                        <td>
                            {{ App\Appointment::RECURRENCE_RADIO[$appointment->recurrence] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appointment.fields.appointment') }}
                        </th>
                        <td>
                            {{ $appointment->appointment->name ?? '' }}
                        </td>
                    </tr>
					<tr>
                        <th>
                            Services
                        </th>
                        <td>
                            @foreach($appointment->services as $id => $services)
                                <span class="label label-info label-many">{{ $services->name }}</span>
                            @endforeach
                        </td>
                    </tr>
					<tr>
                        <th>
                            {{ trans('cruds.appointment.fields.client') }}
                        </th>
                        <td>
                            {{ $appointment->client->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.appointment.fields.employee') }}
                        </th>
                        <td>
                            {{ $appointment->employee->name ?? '' }}
                        </td>
                    </tr>
					<tr>
                        <th>
                            {{ trans('cruds.appointment.fields.venue') }}
                        </th>
                        <td>
                            {!! $appointment->venue !!}
                        </td>
                    </tr>
					<tr>
                        <th>
                            {{ trans('cruds.appointment.fields.comments') }}
                        </th>
                        <td>
                            {!! $appointment->comments !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
@endsection