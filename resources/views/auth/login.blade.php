@extends('layouts.auth-master')

<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('content')
<div class="container d-flex flex-column align-items-center">
    <img src="/Imagenes/logo2.png" class="img-circular mt-3" alt="Logo">
    <div class="container-login w-100 mt-4" style="max-width: 400px;">
        <form method="post" action="{{ route('login.perform') }}" class="w-100">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <h1 class="h2 mb-3 fw-normal text-center">Login</h1>

            @include('layouts.partials.messages')

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                <label for="floatingName">Email or Username</label>
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

            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

            @include('auth.partials.copy')
        </form>
    </div>
</div>
@endsection