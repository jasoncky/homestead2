@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.contact.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.contacts.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                <label for="first_name">{{ trans('cruds.contact.fields.first_name') }}</label>
                <input type="text" id="first_name" name="first_name" class="form-control" value="{{ old('first_name', isset($contact) ? $contact->first_name : '') }}">
                @if($errors->has('first_name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('first_name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.contact.fields.first_name_helper') }}
                </p>
            </div>
             <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                <label for="last_name">{{ trans('cruds.contact.fields.last_name') }}</label>
                <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name', isset($contact) ? $contact->last_name : '') }}">
                @if($errors->has('last_name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('last_name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.contact.fields.last_name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">{{ trans('cruds.contact.fields.email') }}</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($contact) ? $contact->email : '') }}">
                @if($errors->has('email'))
                    <em class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.contact.fields.email_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection