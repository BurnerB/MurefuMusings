@extends('layouts.app')

@section('content')>

<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Murefu</b>Writes</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Reset Password</p>

    @if (Session::has('message'))
          <div class="alert alert-success" role="alert">
              {{ Session::get('message') }}
          </div>
    @endif

    <form method="POST" action="{{ route('reset.password.post') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="fa fa-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
          <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
      </div>
  
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
        <input type="password" class="form-control" placeholder="New Password" name="password">
        <span class="fa fa-lock form-control-feedback"></span>
        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
        <input type="password" class="form-control" placeholder="Retype Password" name="password_confirmation">
        <span class="fa fa-lock form-control-feedback"></span>
        @if ($errors->has('password_confirmation'))
            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
        @endif
      </div>
      <div class="row">
        <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Reset password</button>
          </div>
        <!-- /.col -->
      </div>
    </form>

    <br>
    <p class="mt-3 mb-1">
        <a href="{{ url('/login') }}">Login</a>
      </p>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@endsection
