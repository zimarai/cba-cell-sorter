@extends('layouts.main', [$body_class='login-page'])

@section('page')
<div class="page-header"
    {{-- style="background-image: url('img/geo-bg.jpg'); background-size: cover; background-position: top center;" --}}>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            
                <div class="card">

                    <div class="card-body">
                        
                        <!-- ERRORES -->
                        @error('available_time')
                            <div class="alert alert-danger">
                                <div class="container">
                                    <div class="alert-icon">
                                        <i class="material-icons">error_outline</i>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                    </button>
                                    {{ $message }}
                                </div>
                            </div>
                        @enderror
                        <!-- ERRORES -->
                        <form method="POST" action="{{ route('agendar') }}">
                            @csrf

                            {{-- BEGIN - material wizard --}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="info-text">Ingresa tus datos</h4>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group label-floating is-empty was-validated">
                                        <label class="control-label">Nombre</label>
                                        <input type="text" name="attendant_name"
                                            class="form-control @error('attendant_name') is-invalid @enderror"
                                            value="{{ old('attendant_name') }}" id="exampleInputEmail1">
                                        @error('attendant_name')
                                            <span class="material-input invalid-feedback">
                                                <strong class=" ">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group label-floating is-empty was-validated">
                                        <label class="control-label">E-mail</label>
                                        <div class="input-group">
                                            <input id="test-me" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="attendant_email"
                                                value="{{ old('attendant_email') }}" required>
                                        </div>
                                        @error('attendant_email')
                                            <span class="material-input invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group label-floating is-empty was-validated">
                                        <label class="control-label">Teléfono</label>
                                        <input type="text" name="attendant_phone"
                                            class="form-control @error('attendant_phone') is-invalid @enderror"
                                            value="{{ old('attendant_phone') }}" id="exampleInputEmail1">
                                        @error('attendant_phone')
                                            <span class="material-input invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group label-floating is-empty was-validated">
                                        <label class="control-label">Institución</label>
                                        <div class="input-group @error('organization_type') is-invalid @enderror">
                                            <div class="form-check" style="margin-right: 20px;">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="organization_type" id="organization-usach" value="1">
                                                    USACH
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio"
                                                        name="organization_type" id="organization-otro" value="2">
                                                    Otra institución
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>

                                        </div>
                                        @error('organization_type')
                                            <span class="material-input invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="organization_name" value="">
                            @error('organization_name') {{ $message }} @enderror
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="info-text">Agenda tu hora</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Fecha</label>
                                        <input type="text" class="form-control datetimepicker @error('scheduled_date') is-invalid @enderror" value="10/05/2016"
                                            name="scheduled_date">
                                        @error('scheduled_date')
                                            <span class="material-input invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group label-floating is-empty was-validated">
                                        <label class="control-label">Jornada</label>
                                        <div class="input-group @error('slot') is-invalid @enderror">
                                            <div class="form-check" style="margin-right: 20px;">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="slot"
                                                        id="organization-usach" value="morning">
                                                    {{ Config::get('app.slots.morning.start') }} a {{ Config::get('app.slots.morning.end') }} hrs.
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="slot"
                                                        id="organization-otro" value="afternoon">
                                                    {{ Config::get('app.slots.afternoon.start') }} a {{ Config::get('app.slots.afternoon.end') }} hrs.
                                                    <span class="circle">
                                                        <span class="check"></span>
                                                    </span>
                                                </label>
                                            </div>

                                        </div>
                                        @error('slot')
                                            <span class="material-input invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group label-floating is-empty was-validated">
                                        <label class="control-label">Especie</label>
                                        <input type="text" name="specie"
                                            class="form-control @error('specie') is-invalid @enderror"
                                            value="{{ old('specie') }}" id="exampleInputEmail1">
                                        @error('specie')
                                            <span class="material-input invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group label-floating is-empty was-validated">
                                        <label class="control-label">Total de anticuerpos</label>
                                        <input type="text"
                                            class="form-control @error('total_antibodies') is-invalid @enderror"
                                            name="total_antibodies"
                                            value="{{ old('total_antibodies') }}"
                                            id="exampleInputEmail1">
                                        @error('total_antibodies')
                                            <span class="material-input invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group label-floating is-empty was-validated">
                                        <label class="control-label">Fluoróforos</label>
                                        <input type="text"
                                            class="form-control @error('fluorophores') is-invalid @enderror"
                                            name="fluorophores" value="{{ old('fluorophores') }}"
                                            id="exampleInputEmail1">
                                        @error('fluorophores')
                                            <span class="material-input invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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