@extends('layouts.main', [$body_class='login-page'])

@section('page')
<div class="page-header"
  {{--style="background-image: url('img/geo-bg.jpg'); background-size: cover; background-position: top center;"--}}>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 col-sm-6">
        <div class="card">
        <div class="card-header card-header-primary text-center">
                  <h4 class="card-title">CBA USACH Cell Sorter</h4>
                  <p>Ingresa tu correo y contraseña</p>
                </div>
          <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">E-mail</label>
                        <div class="input-group">
                            <input id="test-me" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required>
                        </div>
                        <span class="material-input">
                            @error('email')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </span>
                    </div>
                
                </div>
              </div>
              <div class="row">
                  <div class="col-sm-10 offset-sm-1">
                      <div class="form-group label-floating is-empty">
                        <label class="control-label">Contraseña</label>

                        <div class="input-group">
                          <input id="password" type="password"
                          class="form-control @error('password') is-invalid @enderror" name="password" required
                          autocomplete="current-password">
                        </div>
                        <span class="material-input">
                        @error('password')
                            <strong>{{ $message }}</strong>
              
                        @enderror
                        </span>
                    </div>
                  </div>
              </div>
              <div class="form-group row mb-0">
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">
                    Ingresar
                  </button>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12 text-center">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                      Recuérdame
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                    {{--TODO: Enable password recovery link 
                    @if(Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                        ¿Olvidaste tu contraseña?
                      </a>
                    @endif
                    --}}
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