@extends('layouts.app')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Murefus</b>Writes</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    @if (Session::has('message'))
          <div class="alert alert-success" role="alert">
              {{ Session::get('message') }}
          </div>
    @endif

    <form method="POST" action="{{ url('/login') }}">
        @csrf

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
        <span class="fa fa-envelope form-control-feedback"></span>
        @if($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
        <input type="password" class="form-control" placeholder="Password" name='password'>
        <span class="fa fa-lock form-control-feedback"></span>
        @if($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('pasword') }}</strong>
            </span>
        @endif
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <br>
    <a href="{{ route('forget.password.get') }}">Reset/Forgot my password</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection
