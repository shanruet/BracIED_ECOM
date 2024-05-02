@extends('layouts.app')

@section('content')
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
    <a href="#"><img src="{{url('admin/images/bracIED.jpg') }}" width="80px" height="80px"></a>
    </div>
  <!-- /.login-logo -->
    <div class="card ">
    <div class="card-header bg-info h5 p-3 text-center">{{ __('Verify Your Email Address') }}</div>
        <div class="card-body login-card-body">
    
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}<br>
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-block btn-danger mt-4 "><strong>{{ __('Request another') }}</strong></button>.
                    </form>
              
        </div>
        <!-- /.login-card-body -->
    </div>
    </div>

</div>
<!-- /.login-box -->

</body>
@endsection
