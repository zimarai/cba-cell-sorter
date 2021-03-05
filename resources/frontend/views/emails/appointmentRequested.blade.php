
      <div class="card-body text-center">
        <h3>Has reservado con éxito el uso del equipo Cell Sorter</h3>
        <p>Tu código de reserva es:</p>
        <h2 class="big-code">{{$appointment->reservation_code}}</h2>
        <table class="table table-bordered table-striped text-left">
          <tbody>
            <tr>
              <td>Día</td>
              <td>{{ $appointment->scheduled_date->format('d-m-Y') }}</td>
            </tr>
            <tr>
              <td>Hora</td>
              <td>{{ Config::get('app.slots.'.strtolower($appointment->slot).'.start') }} a 
              {{ Config::get('app.slots.'.strtolower($appointment->slot).'.end') }} hrs.</td>
            </tr><tr>
              <td>Dependencias</td>
              <td>xxxxxxxxxxxx, Santiago.</td>
            </tr>
            <tr>
              <td>Nombre</td>
              <td>{{ $appointment->attendant_name }}</td>
            </tr>
            <tr>
              <td>Email</td>
              <td>{{ $appointment->attendant_email }}</td>
            </tr>
            <tr>
              <td>Institución</td>
              <td>USACH</td>
            </tr>
          </tbody>
        </table>
        <p>Guarda tu código de reserva, ya que con él podrás modificar tu cita en caso de que lo necesites.
        <br>Recuerda llegar puntualmente al laboratorio. <br>Si no puedes asistir por favor comunícate con nosotros 
        al correo sorter.cba@usach.cl o llama al +562 27183448.
        <br>Nos comunicaremos contigo por teléfono o correo electrónico para confirmar tu asistencia.
        </p>
      </div>