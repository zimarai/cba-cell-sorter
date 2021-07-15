@extends('layouts.main', [$body_class='login-page'])

@section('page')
<div class="page-header"
    {{-- style="background-image: url('img/geo-bg.jpg'); background-size: cover; background-position: top center;" --}}>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body text-center">
                        <h3>Cancelación exitosa</h3>
                        <p>Has anulado con éxito la reserva código</p>
                        <h2 class="big-code">{{$reservation_code}}</h2>
                        <p>Si deseas reagendar tu reserva puedes solicitar otra en el 
                        <a href="/agendar">formulario de agendamiento.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_footer')

<script>

    function scrollToDownload() {
        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>

@endsection