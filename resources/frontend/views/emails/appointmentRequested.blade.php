
      <div class="card-body text-center">
        <h3>Has reservado con éxito el uso del equipo Cell Sorter</h3>
        <p>Tu código de reserva es:</p>
        <h2 class="big-code">{{$appointment->reservation_code}}</h2>
        <table class="table table-bordered table-striped text-left">
          @include('includes.appointmentDetail')
        </table>
        <p>Guarda tu código de reserva, ya que con él podrás modificar tu cita en caso de que lo necesites.
        <br>Si no puedes asistir por favor anula tu reserva <a href="{{ Config::get('app.url') }}/cancelar">aquí.</a>
        <br>Recuerda llegar puntualmente al laboratorio. 
        <br>Si tienes dudas comunícate con nosotros al correo sorter.cba@usach.cl o llama al +562 27183448.
        <br>Nos comunicaremos contigo por teléfono o correo electrónico para confirmar tu asistencia.
        </p>
      </div>