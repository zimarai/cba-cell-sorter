@extends('layouts.main', [$body_class='login-page'])
@section('page')
<div class="page-header">
  <div class="container">
    <div class="card">
      <div class="card-body text-center">
        <h3>Jornada agendada exitósamente</h3>
        <p>Los datos de esta reserva han sido enviados a tu correo.<br>Tu código de reserva es:</p>
        <h2 class="big-code">{{$appointment->reservation_code}}</h2>
        <table class="table table-bordered table-striped table-sm text-left">
          @include('includes.appointmentDetail')
        </table>
        <p>Guarda tu código de reserva, ya que con él podrás modificar tu cita en caso de que lo necesites.
        <br>Recuerda llegar puntualmente al laboratorio. <br>Si no puedes asistir por favor comunícate con nosotros 
        al correo cell-sorter@cba.usach.cl o cancela tu hora por medio de esta plataforma.
        <br>Nos comunicaremos contigo por teléfono o correo electrónico para confirmar tu asistencia.
        </p>
        <button class="btn btn-info"><a href="/" style="color:white">Volver</a><div class="ripple-container"></div></button>
      </div>
    </div>
  </div>
  </div>
@endsection