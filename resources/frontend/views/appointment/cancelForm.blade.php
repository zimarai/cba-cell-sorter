@extends('layouts.main', [$body_class='login-page'])

@section('page')
<div class="page-header"
    {{-- style="background-image: url('img/geo-bg.jpg'); background-size: cover; background-position: top center;" --}}>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body text-center">
                        <h3>Cancelar reserva</h3>
                        <h4>Si deseas cancelar tu reserva, ingresa el código de tu reserva<br>y el correo con el que agendaste la jornada.</h4>
                        <form method="POST" action="{{ route('cancelar') }}">
                            @csrf

                            {{-- BEGIN - material wizard --}}
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group label-floating is-empty was-validated">
                                        <label class="control-label">Código de reserva</label>
                                        <input type="text" name="reservation_code"
                                            class="form-control @error('reservation_code') is-invalid @enderror"
                                            value="{{ old('reservation_code') }}">
                                        @error('reservation_code')
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
                                                class="form-control @error('attendant_email') is-invalid @enderror" name="attendant_email"
                                                value="{{ old('attendant_email') }}" required>
                                        </div>
                                        @error('attendant_email')
                                            <span class="material-input invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        <button type="submit" class="btn btn-primary">
                                        Consultar
                                    </button>
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