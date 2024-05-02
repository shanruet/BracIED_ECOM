@extends('layouts.app')

@section('content')
<div class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><img src="{{url('admin/images/bracIED.jpg') }}" width="100px" height="100px"></a>
  </div>

  <div class="card">
  <div class="card-header bg-info text-center">
    <strong class="h5 p-5">Register</strong>
    </div>
    <div class="card-body register-card-body">
      <form method="POST" action="{{ route('register') }}">
                        @csrf
        <div class="input-group mb-3">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Full Name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

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
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

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
        <div class="input-group mb-3">
          <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password">
                        
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" placeholder="Full address" autofocus>
  
              @error('address')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-home"></span>
              </div>
            </div>
          </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-success">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
              <label for="agreeTerms">
               I agree to the <a style="color:green;" href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">
                                    {{ __('Register') }}
                                </button>
          </div>
          <!-- /.col -->
        </div>
      </form>
<hr>
      <div class="social-auth-links text-center mt-3 mb-3">
        <p><b>already have an account?</b></p>
                <div class="row">
                    <div class="col-sm-6"> 
                    
                            <a href="{{ url('/') }}" class="btn btn-block btn-outline-danger">
                            <i class="fas fa-home mr-1" style="color:black;"></i>
                            Home
                            </a>
                    </div>
                    <div class="col-sm-6"> 

                            <a href="{{ route('login') }}" class="btn btn-block btn-outline-warning">
                            <i class="fas fa-user mr-1"></i>
                            Sign in
                            </a>
                    </div>
                </div>
        </div>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
</div>
@endsection
