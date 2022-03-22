@extends('layouts.customlogin')

@section('content')
<div class="sidenav">
  <div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-8 card-margin mx-auto">
        <div class="card card-signin">
          <div class="card-body">
            <img src="/images/logo_cores_inteiro.png" alt="logo_white" class="logo_login rounded mx-auto d-block">
            <form method="POST" action="{{ route('login') }}" class="form-signin">
              @csrf
              <div class="form-label-group">
                <input type="email" id="email" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder="Email address" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                <label for="email">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <label for="password">Password</label>
              </div>

              <!-- <div class="form-group row">
                <div class="col-md-6">
                  <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember">
                      {{ __('Remember Me') }}
                    </label>
                  </div>
                </div>
              </div> -->

              <div class="form-group row mb-0">
                <div class="offset-md-2">
                  @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                    </a>
                  @endif
                </div>
                <button class="btn btn-outline-primary btn-block text-uppercase" type="submit">
                  Sign in
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="fundo_login">
    
</div>
@endsection
