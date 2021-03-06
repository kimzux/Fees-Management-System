<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FeesManagementSystem</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- Custom fonts for this template-->
<link href="{{asset('/customauth/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">
<link href="{{asset('/customauth/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">


<!-- Custom styles for this template-->
<link href="{{asset('/customauth/css/sb-admin-2.min.css')}}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div>
<!-- End of Main Content -->

</head>

<body class="" style="overflow-y:hidden;">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div style="padding-top:70px;" class="col-xl-10 col-lg-12 col-md-9">
       
        <div class="card o-hidden border-0 shadow-lg my-3 " >
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form method="POST"  class="user" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                      <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email Address...">
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                    <div class="form-group">
                    
                    <div class="form-group">
                      <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autofocus placeholder="Password">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                   </div>
                   <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                      <input type="checkbox" class="form-check-input custom-control-input" name="remember" id="customCheck" {{ old('remember') ? 'checked' : '' }}>
                      <label class="custom-control-label" for="customCheck">{{ __('Remember Me') }}</label>
                    </div>
                  </div>
            
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      {{ __('Login') }}
                  </button>
                    <hr>
                    <a href="{{ url('auth/google') }}" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small"href="{{ route('password.request') }}">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <!-- Bootstrap core JavaScript-->
  <script src={{asset('/customauth/vendor/jquery/jquery.min.js')}}></script>
  <script src={{asset('/customauth/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src={{asset('vendor/jquery-easing/jquery.easing.min.js')}}></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

</body>

</html>

