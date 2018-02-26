@extends('app')
@include('layouts.navigation')
@section('content')
<div class="container">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group ">
            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
        </div>
        <div class="form-group">
            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

        </div>
        <div class="form-group">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Register User</button>
        </div>
    </form>
</div>
@endsection
