@extends('layouts.main', [$body_class='login-page'])

@section('page')
<div class="page-header"
  style="background-image: url('img/geo-bg.jpg'); background-size: cover; background-position: top center;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">
                  Correo electrónico
                </label>
                <div class="col-md-6">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">face</i>
                      </span>
                    </div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                      name="email" value="{{ old('email') }}" placeholder="Email..." required
                      autocomplete="email" autofocus>
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">
                  Contraseña
                </label>
                <div class="col-md-6">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input id="password" type="password" placeholder="Contraseña..."
                      class="form-control @error('password') is-invalid @enderror" name="password" required
                      autocomplete="current-password">
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                      Recuérdame
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Ingresar
                  </button>
                  @if(Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                      ¿Olvidaste tu contraseña?
                    </a>
                  @endif
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection