@extends('layouts.main', [$body_class='login-page'])

@section('page')
<div class="page-header"
    {{-- style="background-image: url('img/geo-bg.jpg'); background-size: cover; background-position: top center;" --}}>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form method="POST" action="{{ route('confirma-cancelar') }}">
                            <input type="hidden" name="reservation_code" value="{{$appointment->reservation_code}}">
                            <input type="hidden" name="attendant_email" value="{{$appointment->attendant_email}}">
                    @csrf
                        <div class="card-body text-center">
                            <h3>Anular reserva</h3>
                            <p>Estas tratando de anular la reserva con código:</p>
                            <h2 class="big-code">{{$appointment->reservation_code}}</h2>
                            <table class="table table-bordered table-striped table-sm text-left">
                                @include('includes.appointmentDetailCancel')
                            </table>
                            @guest
                                    <a href="/cancelar" class="btn btn-link">Volver</a>   
                            @else
                                @if(Auth::user()->role == 'ADMIN')
                                    <a href="/admin" class="btn btn-link">Volver</a> 
                                @else
                                
                                    <a href="/cancelar" class="btn btn-link">Volver</a>     
                                @endif
                            @endif
                            
                            <button class="btn btn-danger" type="submit">Anular</button>
                        </div>
                    </form>
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