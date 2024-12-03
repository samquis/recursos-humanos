@extends('layouts.auth-master')

@section('content')
<div class="container d-flex flex-column align-items-center">
    <!--<img class="mb-4 img-circular" src="{!! url('images/bootstrap-logo.svg') !!}" alt="Logo" width="72" height="57">-->
    <div class="container-register w-100 mt-4" style="max-width: 400px;">
        <form method="post" action="{{ route('register.perform') }}" class="w-100">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <h1 class="h3 mb-3 fw-normal text-center">Register</h1>

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Juan Perez" required="required" autofocus>
                <label for="floatingName">Name</label>
                @if ($errors->has('name'))
                    <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                <label for="floatingEmail">Email address</label>
                @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                <label for="floatingUsername">Username</label>
                @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                <label for="floatingPassword">Password</label>
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                <label for="floatingConfirmPassword">Confirm Password</label>
                @if ($errors->has('password_confirmation'))
                    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

            @include('auth.partials.copy')
        </form>
    </div>
</div>
@endsection