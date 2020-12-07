@extends('layouts.main', [$body_class='login-page'])

@section('page')
<div class="page-header"
  {{--style="background-image: url('img/geo-bg.jpg'); background-size: cover; background-position: top center;"--}}>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            {{-- BEGIN - material wizard --}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="info-text">Ingresa tus datos</h4>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Nombre</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                        value="{{ old('name') }}" id="exampleInputEmail1">
                                        <span class="material-input">
                                            @error('name')
                                                <strong>{{ $message }}</strong>
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
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
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Teléfono</label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" 
                                        value="{{ old('phone') }}" id="exampleInputEmail1">
                                        <span class="material-input">
                                            @error('phone')
                                                <strong>{{ $message }}</strong>
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Institución</label>
                                        <div class="input-group">
                                            <div class="form-check" style="margin-right: 20px;">
                                                <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="organization" id="organization-usach" value="1">
                                                USACH
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="organization" id="organization-otro" value="2">
                                                Otra institución
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                                </label>
                                            </div>

                                        </div>
                                        <span class="material-input">
                                            @error('organization')
                                                <strong>{{ $message }}</strong>
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
		                            <h4 class="info-text">Agenda tu hora</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Fecha</label>
                                        <input type="text" class="form-control datetimepicker" value="10/05/2016">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Jornada</label>
                                        <div class="input-group">
                                            <div class="form-check" style="margin-right: 20px;">
                                                <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="organization" id="organization-usach" value="1">
                                                10:00 - 13:00 hrs
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="organization" id="organization-otro" value="2">
                                                15:00 - 18:00 hrs
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                                </label>
                                            </div>

                                        </div>
                                        <span class="material-input">
                                            @error('organization')
                                                <strong>{{ $message }}</strong>
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Especie</label>
                                        <input type="text" class="form-control @error('specie') is-invalid @enderror" 
                                        value="{{ old('specie') }}" id="exampleInputEmail1">
                                        <span class="material-input">
                                            @error('specie')
                                                <strong>{{ $message }}</strong>
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Total de anticuerpos</label>
                                        <input type="text" class="form-control @error('total_antibodies') is-invalid @enderror" 
                                        value="{{ old('total_antibodies') }}" id="exampleInputEmail1">
                                        <span class="material-input">
                                            @error('total_antibodies')
                                                <strong>{{ $message }}</strong>
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Fluoróforos</label>
                                        <input type="text" class="form-control @error('fluorophores') is-invalid @enderror" 
                                        value="{{ old('fluorophores') }}" id="exampleInputEmail1">
                                        <span class="material-input">
                                            @error('fluorophores')
                                                <strong>{{ $message }}</strong>
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Enviar solicitud
                                    </button>
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

@section('custom_footer')

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      materialKit.initFormExtendedDatetimepickers();
    });

    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>

@endsection