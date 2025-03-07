{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!doctype html>
<html lang="en" data-bs-theme="blue-theme">


<!-- Mirrored from codervent.com/maxton/demo/vertical-menu/auth-cover-forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Mar 2025 14:23:14 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forgot Password</title>
  <!--favicon-->
	<link rel="icon" href="{{asset('/../admin/assets/images/favicon-32x32.png')}}" type="image/png">
  <!-- loader-->
	<link href="{{asset('/../admin/assets/css/pace.min.css')}}" rel="stylesheet">
	<script src="{{asset('/../admin/assets/js/pace.min.js')}}"></script>

  <!--plugins-->
  <link href="{{asset('/../admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('/../admin/assets/plugins/metismenu/metisMenu.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/../admin/assets/plugins/metismenu/mm-vertical.css')}}">
  <!--bootstrap css-->
  <link href="{{asset('/../admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="styleshseet">
  <!--main css-->
  <link href="{{asset('/../admin/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
  <link href="{{asset('/../admin/sass/main.css')}}" rel="stylesheet">
  <link href="{{asset('/../admin/sass/dark-theme.css')}}" rel="stylesheet">
  <link href="{{asset('/../admin/sass/blue-theme.css')}}" rel="stylesheet">
  <link href="{{asset('/../admin/sass/responsive.css')}}" rel="stylesheet">

  </head>

<body>


  <!--authentication-->

  <div class="section-authentication-cover">
    <div class="">
      <div class="row g-0">

        <div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex border-end bg-transparent">

          <div class="card rounded-0 mb-0 border-0 shadow-none bg-transparent bg-none">
            <div class="card-body">
              <img src="{{asset('/../admin/assets/images/auth/reset-password1.png')}}" class="img-fluid auth-img-cover-login" width="550" alt="">
            </div>
          </div>
        </div>

            <!-- Email Address -->
        <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
          <div class="card rounded-0 m-3 mb-0 border-0 shadow-none bg-none">
            <div class="card-body p-sm-5">
              <img src="{{asset('/../admin/assets/images/logo1.png')}}" class="mb-4" width="145" alt="">
              <h4 class="fw-bold">Forgot Password?</h4>
              <p class="mb-0">Enter your registered email ID to reset the password</p>

              <div class="form-body mt-4">
                <form class="row g-4" method="POST" action="{{ route('password.email') }}">
                    @csrf
                  <div class="col-12">
                    <label class="form-label" for="email" :value="__('Email')">Email id</label>
                    <input class="form-control" placeholder="example@user.com" id="email" type="email" name="email" :value="old('email')" required autofocus>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>
                  <div class="col-12">
                    <div class="d-grid gap-2">
                      <button type="button" class="btn btn-grd-info">{{ __('Email Password Reset Link') }}</button>
                       <a href="{{ url ('login')}}" class="btn btn-light">Back to Login</a>
                    </div>
                  </div>
                </form>
              </div>

          </div>
          </div>
        </div>
      </div>
      <!--end row-->
    </div>
  </div>

  <!--authentication-->




  <!--plugins-->
  <script src="{{asset('/../admin/assets/js/jquery.min.js')}}"></script>

  <script>
    $(document).ready(function () {
      $("#show_hide_password a").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_password input').attr("type") == "text") {
          $('#show_hide_password input').attr('type', 'password');
          $('#show_hide_password i').addClass("bi-eye-slash-fill");
          $('#show_hide_password i').removeClass("bi-eye-fill");
        } else if ($('#show_hide_password input').attr("type") == "password") {
          $('#show_hide_password input').attr('type', 'text');
          $('#show_hide_password i').removeClass("bi-eye-slash-fill");
          $('#show_hide_password i').addClass("bi-eye-fill");
        }
      });
    });
  </script>

</body>


<!-- Mirrored from codervent.com/maxton/demo/vertical-menu/auth-cover-forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Mar 2025 14:23:15 GMT -->
</html>
