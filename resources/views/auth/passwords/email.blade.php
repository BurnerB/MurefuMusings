@extends('layouts.app')

@section('content')

<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Murefu</b>Writes</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Forgot your password? Want to reset yout password?</p>

    @if (Session::has('message'))
          <div class="alert alert-success" role="alert">
              {{ Session::get('message') }}
          </div>
    @endif

    <form method="POST" action="{{ route('forget.password.post') }}">
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
      <div class="row">
        <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
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

