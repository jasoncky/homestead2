@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.appointment.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.appointments.update", [$appointment->id]) }}" 
            method="POST" 
            enctype="multipart/form-data" 
            @if($appointment->appointments_count || $appointment->appointment) onsubmit="return confirm('Do you want to apply these changes to all future recurring appointments, too?');" @endif
        >
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.appointment.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($appointment) ? $appointment->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.appointment.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('start_time') ? 'has-error' : '' }}">
                <label for="start_time">{{ trans('cruds.appointment.fields.start_time') }}*</label>
                <input type="text" id="start_time" name="start_time" class="form-control datetime" value="{{ old('start_time', isset($appointment) ? $appointment->start_time : '') }}" required>
                @if($errors->has('start_time'))
                    <em class="invalid-feedback">
                        {{ $errors->first('start_time') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.appointment.fields.start_time_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('end_time') ? 'has-error' : '' }}">
                <label for="end_time">{{ trans('cruds.appointment.fields.end_time') }}*</label>
                <input type="text" id="end_time" name="end_time" class="form-control datetime" value="{{ old('end_time', isset($appointment) ? $appointment->end_time : '') }}" required>
                @if($errors->has('end_time'))
                    <em class="invalid-feedback">
                        {{ $errors->first('end_time') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.appointment.fields.end_time_helper') }}
                </p>
            </div>
            @if(!$appointment->appointment && !$appointment->appointments_count)
                <div class="form-group {{ $errors->has('recurrence') ? 'has-error' : '' }}">
                    <label>{{ trans('cruds.appointment.fields.recurrence') }}*</label>
                    @foreach(App\Appointment::RECURRENCE_RADIO as $key => $label)
                        <div>
                            <input id="recurrence_{{ $key }}" name="recurrence" type="radio" value="{{ $key }}" {{ old('recurrence', $appointment->recurrence) === (string)$key ? 'checked' : '' }} required>
                            <label for="recurrence_{{ $key }}">{{ $label }}</label>
                        </div>
                    @endforeach
                    @if($errors->has('recurrence'))
                        <em class="invalid-feedback">
                            {{ $errors->first('recurrence') }}
                        </em>
                    @endif
                </div>
            @else
                <input type="hidden" name="recurrence" value="{{ $appointment->recurrence }}">
            @endif
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection