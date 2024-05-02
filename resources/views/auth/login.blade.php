@extends('layouts.app')

@section('content')
<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
  <a href="#"><img src="{{url('admin/images/bracIED.jpg') }}" width="100px" height="100px"></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-header bg-info text-center">
    <strong class="h6 p-5">Login</strong>
    </div>
    <div class="card-body register-card-body">
  
 

    <form method="POST" action="{{ route('login') }}">
                        @csrf
        <div class="input-group mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email / Phone" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">

          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
          <button type="submit" class="btn btn-block btn-success float-right">
                                    {{ __('Login') }}
                                </button>

         
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->
      <hr style="margin-top:20px; height:2px;border-width:0;color:gray;background-color:gray">
      @if (Route::has('password.request')) <a href="{{ route('password.request') }}" class="text-center text-danger"><i class="fas fa-key mr-1"></i> Forgot your password ?</a><hr>     @endif
      <a href="{{ route('register') }}" class="text-center text-info"><i class="fas fa-user mr-1"></i> Don't have an account ? <b>Create now! </b></a><hr>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

</body>
@endsection
