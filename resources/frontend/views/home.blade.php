@extends('layouts.main', [$body_class='index-page'])

@section('page')
<div class="page-header header-filter clear-filter" data-parallax="true"
  style="background-image: url('{{ asset('img/bc-facsmelody-hands.png') }}');">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-5">
        <div class="brand text-left">
          <img src="{{ asset('img/cba-logo.png') }}" style="max-width:400px">
          <h1>Cell Sorter</h1>
          <h4>CBA Usach pone a disposición el servicio de cell sorting mediante un Cell Sorter BD FACSMelody. El equipo cuenta con 3 láser (488 nm, 640 nm y 405 nm) y detectores para 9 colores de fluorescencia. Este equipo permite la separación celular con una alta pureza de manera rápida y eficiente. </h4>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row features-row">
    <div class="col-md-4 mx-auto text-center">
      <div class="card">
        <div class="card-body">
          <div class="icon">
            <i class="material-icons first">sentiment_satisfied_alt</i>
          </div>
          <h3>Fácil de usar</h3><hr>
          <p>With <b>BD FACSChorus™ Software</b>, researchers are guided throughout the entire cell sorting process
            using advanced automation technology...</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mx-auto text-center">
      <div class="card">
        <div class="card-body">
          <div class="icon">
            <i class="material-icons second">important_devices</i>
          </div>
          <h3>Gran performance</h3><hr>
            <p>Simplified operation does not mean reduced performance. The BD FACSMelody System features excellent
              sensitivity for accurate resolution...</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mx-auto text-center">
      <div class="card">
        <div class="card-body">
          <div class="icon">
            <i class="material-icons third">verified_user</i>
          </div>
          <h3>Seguro</h3><hr>
          <p>Simplified operation does not mean reduced performance. The BD FACSMelody System features excellent
            sensitivity for accurate resolution of low density cell markers...</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="main">
  <div class="section agenda-home">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mx-auto">
          <img src="{{ asset('img/features-efficiency.png') }}" class="img-fluid">
        </div>
        <div class="col-md-8 mx-auto">
          <h3>Agenda horas para utilizar el equipo Cell Sorter</h3>
          <h5>Existen dos jornadas, en la mañana y a media tarde. Las reservas podrán efectuarse hasta con 24 horas de anticipación. En caso de consultas sobre su reserva o su experimento, favor contactarnos a sorter.cba@usach.cl o llamar al +562 27183448.</h5>
          <p>
            <i class="material-icons-outlined" style="float: left;margin-right: 10px;">wb_sunny</i> Jornada de la
            mañana: 09:30 a 13:00 hrs.</p>
          <p><i class="material-icons-outlined" style="float: left;margin-right: 10px;">bedtime</i> Jornada de la tarde:
            14:30 a 18:00 hrs.</p>
          <a href="{{ route('agendar') }}" class="btn btn-primary btn-lg">
            <span class="material-icons">event_available</span> Agendar jornada
          </a>
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
