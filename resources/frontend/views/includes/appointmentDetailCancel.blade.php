<tbody>
  <tr>
    <td>Día</td>
    <td>{{ $appointment->scheduled_date->format('d-m-Y') }}</td>
  </tr>
  <tr>
    <td>Hora</td>
    <td>{{ Config::get('app.slots.'.strtolower($appointment->slot).'.start') }} a 
    {{ Config::get('app.slots.'.strtolower($appointment->slot).'.end') }} hrs.</td>
  </tr>
  <tr>
    <td>Nombre</td>
    <td>{{ $appointment->attendant_name }}</td>
  </tr>
  <tr>
    <td>Email</td>
    <td>{{ $appointment->attendant_email }}</td>
  </tr>
</tbody>