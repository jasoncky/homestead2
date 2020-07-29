@extends('layouts.app')
@section('content')
<div class="member-login-box">
    <div class="login-logo">
        <div class="login-logo">
            <a href="{{ route('member.home') }}">
                Member Area
            </a>
        </div>
    </div>
    <div class="card ">
        <div class="card-body login-card-body">
            <p class="login-box-msg">
                {{ trans('global.login') }}
            </p>

            @if(session()->has('message'))
                <p class="alert alert-info">
                    {{ session()->get('message') }}
                </p>
            @endif

            <form action="{{ route('member.login.post') }}" method="POST">
                @csrf
				
				<div class="text-center social-btn">
					<a href="{{ url('/redirect/facebook') }}" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Sign in with <b>Facebook</b></a>
					<a href="{{ url('/redirect/google') }}" class="btn btn-danger btn-block"><i class="fa fa-google"></i> Sign in with <b>Google</b></a>
				</div>
				
				<div class="or-seperator"><i>or</i></div>
				
				
                <div class="form-group">
                    <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('global.login_email') }}" name="email" value="{{ old('email', null) }}">
					
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="{{ trans('global.login_password') }}">

                    @if($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>

                <div class="row">
					<!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ trans('global.login') }}
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
			
            <p class="mb-1">

            </p>
			
			<p class="mb-1">
                    <a href="{{ route('register') }}">
                        Member Register
                    </a>
                </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
@endsection