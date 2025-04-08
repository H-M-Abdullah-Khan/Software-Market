{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Phone Number -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />

            <x-text-input id="phone" class="block mt-1 w-full"
                            type="Number"
                            name="phone"
                            required/>

            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>
        <!-- Role Base-->
        <div class="mt-4">
            <x-input-label for="role" :value="__('Role')" />
            <p style="color: white">Register As Company</p>
            <x-text-input id="role" class="block mt-1"
                            name="role"
                            type="radio"
                            required value="Company"/>
            <p style="color: white">Register As User</p>
            <x-text-input id="role" class="block mt-1"
                            name="role"
                            type="radio"
                            required value="User"/>

            <x-input-error :messages="$errors->get('Role')" class="mt-2" />

        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!doctype html>
<html lang="en" data-bs-theme="dark">


<!-- Mirrored from codervent.com/maxton/demo/vertical-menu/auth-cover-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Mar 2025 14:23:13 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registeration Form</title>
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
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
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
              <img src="{{asset('/../admin/assets/images/auth/register1.png')}}" class="img-fluid auth-img-cover-login" width="500"
                alt="">
            </div>
          </div>

        </div>

        <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
          <div class="card rounded-0 m-3 border-0 shadow-none bg-none">
            <div class="card-body p-sm-5">
              <img src="{{asset('/../admin/assets/images/logo1.png')}}" class="mb-4" width="145" alt="">
              <h4 class="fw-bold">Get Started Now</h4>
              <p class="mb-0">Enter your credentials to create your account</p>

              <div class="row g-3 my-4">
                <div class="col-12 col-lg-6">
                  <button class="btn btn-filter py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img src="{{asset('/../admin/assets/images/apps/05.png')}}" width="20" class="me-2" alt="">Google</button>
                </div>
                <div class="col col-lg-6">
                  <button class="btn btn-filter py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img src="{{asset('/../admin/assets/images/apps/17.png')}}" width="20" class="me-2" alt="">Facebook</button>
                </div>
              </div>

              <div class="separator section-padding">
                <div class="line"></div>
                <p class="mb-0 fw-bold">OR</p>
                <div class="line"></div>
              </div>

              <div class="form-body mt-4">
                <form class="row g-3" method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Name -->
                  <div class="col-12">
                    <label class="form-label"  for="name" :value="__('Name')" >Username</label>
                    <input class="form-control" placeholder="Username" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" >
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                  </div>
                    <!-- Email Address -->
                  <div class="col-12">
                    <label class="form-label" for="email" :value="__('Email')" >Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autocomplete="username"  placeholder="user123@gmail.com">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>
                    <!-- Password -->
                  <div class="col-12">
                    <label for="password" :value="__('Password')" class="form-label">Password</label>
                    <div class="input-group" id="show_hide_password">
                      <input type="password" class="form-control"id="password" name="password" required autocomplete="new-password" placeholder="abc123@#%" >
                       <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                       <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                  </div>
                    <!-- Confirm Password -->
                  <div class="col-12">
                    <label for="password_confirmation" :value="__('Confirm Password')" class="form-label">Confirm Password</label>
                    <div class="input-group" id="show_hide_password">
                      <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"  placeholder="abc123@#%" >
                       <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                  </div>
                    <!-- Phone Number -->
                  <div class="col-12">
                    <label for="phone" :value="__('Phone')" class="form-label">Phone Number</label>
                    <input id="phone" type="Number" name="phone" required class="form-control" placeholder="+XX XXX XXXXXXX" >
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                  </div>
                  <!-- Role Base-->
                  <div class="col-12">
                    <label for="role" :value="__('Role')" class="form-label">Role</label>
                    <select class="form-select" id="inputSelectCountry" aria-label="Default select example" name="role" >
                        <option id="role" required value="User">Register As User</option>
                      <option id="role"  required value="Company">Register As Company</option>
                    </select>
                    <x-input-error :messages="$errors->get('Role')" class="mt-2" />
                  </div>
                  <!-- Agreement-->
                  <div class="col-12">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" required>
                      <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms &amp; Conditions</label>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="d-grid">
                      <button type="submit" class="btn btn-grd-danger"  href="{{ url('../auth/dashboard') }}">{{ __('Register') }}</button>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="text-start">
                    <p class="mb-0">Already have an account? <a href="{{ url('login') }}">Sign in here</a></p>
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


<!-- Mirrored from codervent.com/maxton/demo/vertical-menu/auth-cover-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Mar 2025 14:23:14 GMT -->
</html>

