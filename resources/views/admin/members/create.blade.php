@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.member.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.members.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.member.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has(''))
                    <div class="invalid-feedback">
                        {{ $errors->first('') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.member.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}" required>
                @if($errors->has(''))
                    <div class="invalid-feedback">
                        {{ $errors->first('') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.email_helper') }}</span>
            </div>
			<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                <label for="phone">{{ trans('cruds.member.fields.phone') }}</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', isset($member) ? $member->phone : '') }}">
                @if($errors->has('phone'))
                    <em class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.member.fields.phone_helper') }}
                </p>
            </div>
			<div class="form-group">
                <label class="required" for="password">{{ trans('cruds.member.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password" required>
                @if($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.password_helper') }}</span>
            </div>
			<div class="form-group">
                <label for="provider">{{ trans('cruds.member.fields.provider') }}</label>
                <input class="form-control {{ $errors->has('provider') ? 'is-invalid' : '' }}" type="text" name="provider" id="provider" value="{{ old('provider', '') }}" >
                @if($errors->has(''))
                    <div class="invalid-feedback">
                        {{ $errors->first('') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.provider_helper') }}</span>
            </div>
			<div class="form-group">
                <label for="provider_id">{{ trans('cruds.member.fields.provider_id') }}</label>
                <input class="form-control {{ $errors->has('provider_id') ? 'is-invalid' : '' }}" type="text" name="provider_id" id="provider_id" value="{{ old('provider_id', '') }}" >
                @if($errors->has(''))
                    <div class="invalid-feedback">
                        {{ $errors->first('') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.provider_id_helper') }}</span>
            </div>
			<div class="form-group">
                <label for="google_id">{{ trans('cruds.member.fields.google_id') }}</label>
                <input class="form-control {{ $errors->has('google_id') ? 'is-invalid' : '' }}" type="text" name="google_id" id="google_id" value="{{ old('google_id', '') }}" >
                @if($errors->has(''))
                    <div class="invalid-feedback">
                        {{ $errors->first('') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.google_id_helper') }}</span>
            </div>
			<div class="form-group">
                <label class="required" for="status">{{ trans('cruds.member.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status" required>
					<option value="Active">Active</option>
					<option value="Inactive">Inactive</option>
				</select>
                @if($errors->has('status'))
                    <span class="text-danger">{{ $errors->first('status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.photoDropzone = {
    url: '{{ route('admin.members.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="photo"]').remove()
      $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
		@if(isset($member) && $member->photo)
			  var file = {!! json_encode($member->photo) !!}
				  this.options.addedfile.call(this, file)
			  this.options.thumbnail.call(this, file, '{{ $member->photo->getUrl('thumb') }}')
			  file.previewElement.classList.add('dz-complete')
			  $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
			  this.options.maxFiles = this.options.maxFiles - 1
		@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }
        return _results
    }
}
</script>
@endsection