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
    <td>Dependencias</td>
    <td>Laboratorio de Inmunología CBA USACH, Av. Libertador Bernardo O'Higgins #3363, edificio Eduardo Morales Santos, tercer piso, Santiago.</td>
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
    <td>
      @if ($appointment->organization_type === 2)
        Otro organismo
      @else
        USACH
      @endif
    </td>
  </tr>
  <tr>
    <td>Especie</td>
    <td>{{ $appointment->specie }}</td>
  </tr>
  <tr>
    <td>Anticuerpos</td>
    <td>{{ $appointment->total_antibodies }}</td>
  </tr>
  <tr>
    <td>Fluoróforos</td>
    <td>{{ $appointment->fluorophores }}</td>
  </tr>
</tbody>