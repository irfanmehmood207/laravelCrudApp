@extends('app')
@include('layouts.navigation')
@section('content')
<div class="container">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email" >E-Mail Address</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            <!-- @if ($errors->has('email'))
                <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif -->
        </div>
        <div class="form-group">
            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            <!-- @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif -->
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Login</button>
            <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
        </div>
    </form>
</div>
@endsection
@include('layouts.formErrors')