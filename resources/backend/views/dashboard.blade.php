@extends('layouts.base')

@section('title', 'Dashboard')

@section('konten')
  <!-- Main Sidebar Container -->
  <div class="row">
    <div class="col-lg-10 col-md-12 offset-lg-1 offset-md-0">
    <div class="card">
        <div class="card-header">
        	<h2 class="card-title">Reservas</h3>
        </div>
	    <div class="card-body">
	         <table class="table table-bordered">
				<thead>
				    <tr>
				      <th scope="col">Código</th>
				      <th scope="col">Jornada</th>
				      <th scope="col">Asistente</th>
				      <th scope="col">Detalles</th>
				      <th scope="col">Estado</th>
				    </tr>
				</thead>
				<tbody>
					@foreach ($appointments as $appointment)
							
						@if ($appointment->status == 'ENTERED' || $appointment->status == 'AWAITING' || $appointment->status == 'COMPLETED' || $appointment->status == 'EXPIRED') 
				    <tr>
						@else
						<tr style="background-color: #f1f1f1;">
						@endif
				      <th scope="row" style="color:#555;font-size:24px;">{{ $appointment->reservation_code }}</th>
				      <td>{{ $appointment->scheduled_date->format('d-m-Y') }}
							{{ $appointment->slot == 'MORNING' ? '(AM)' : '(PM)' }} <br><small>{{ Config::get('app.slots.'.strtolower($appointment->slot).'.start') }} a 
    					{{ Config::get('app.slots.'.strtolower($appointment->slot).'.end') }} hrs.</small></td>
				      <td><b>{{ $appointment->attendant_name }}</b><br>{{ $appointment->attendant_email }}<br>{{ $appointment->attendant_phone }}</td>
				      <td>Especie: {{ $appointment->specie }}<br>Fluoróforos: {{ $appointment->fluorophores }}<br>Anticuerpos: {{ $appointment->total_antibodies }}</td>
				      <td>
								@if ($appointment->status == 'AWAITING') 

									<form method="POST" action="{{ route('modificar') }}" style="display:inline-block">
										@csrf
										<input type="hidden" name="reservation_code" value="{{$appointment->reservation_code}}">
										<input type="hidden" name="attendant_email" value="{{$appointment->attendant_email}}">
										<input type="hidden" name="operation" value="CANCEL">
										<p><span class=""><i class="fas fa-check"></i></span> Pendiente</p>
										<a href="#" onclick="this.closest('form').submit();return false;" style="text-decoration: underline; color: grey">Anular</a>
									</form>

								@elseif ($appointment->status == 'ENTERED')
										
										<p><i class="fa fa-arrow-right"></i>  Ingresada</p>
										
										<form method="POST" action="{{ route('modificar') }}" style="display:inline-block">
											@csrf
											<input type="hidden" name="reservation_code" value="{{$appointment->reservation_code}}">
											<input type="hidden" name="reservation_code" value="{{$appointment->reservation_code}}">
											<input type="hidden" name="operation" value="APPROVE">
											<button type="submit" class="btn btn-success btn-sm"><i class="fas fa-check"></i> Aprobar</button>
										</form>

										<form method="POST" action="{{ route('modificar') }}" style="display:inline-block">
											@csrf
											<input type="hidden" name="reservation_code" value="{{$appointment->reservation_code}}">
											<input type="hidden" name="reservation_code" value="{{$appointment->reservation_code}}">
											<input type="hidden" name="operation" value="REJECT">
											<button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Rechazar</button>
										</form>

								@elseif ($appointment->status == 'EXPIRED')

										<p><i class="fas fa-clock" style="color:orange"></i> Expirada</p>

										<form method="POST" action="{{ route('modificar') }}" style="display:inline-block">
											@csrf
											<input type="hidden" name="reservation_code" value="{{$appointment->reservation_code}}">
											<input type="hidden" name="reservation_code" value="{{$appointment->reservation_code}}">
											<input type="hidden" name="operation" value="COMPLETE">
											<button type="submit" class="btn btn-success btn-sm"><i class="fas fa-check"></i> Efectuada</button>
										</form>

										<form method="POST" action="{{ route('modificar') }}" style="display:inline-block">
											@csrf
											<input type="hidden" name="reservation_code" value="{{$appointment->reservation_code}}">
											<input type="hidden" name="reservation_code" value="{{$appointment->reservation_code}}">
											<input type="hidden" name="operation" value="VOID">
											<button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Sin asistencia</button>
										</form>

								@elseif ($appointment->status == 'COMPLETED') 
									<span class="badge badge-success"><i class="fas fa-check"></i></span> Completada
								@elseif ($appointment->status == 'REJECTED') 
									<span class="badge badge-danger"><i class="fas fa-times"></i></span> Rechazada
								@elseif ($appointment->status == 'CANCELED') 
									@if ($appointment->edited_by == 'ADMINISTRATOR') 
										<span class="badge badge-danger"><i class="fas fa-times"></i></span> Anulada por el administrador 
									@else
										<span class="badge badge-warning"><i class="fas fa-times"></i></span> Anulada por el usuario 
									@endif
								@elseif ($appointment->status == 'ABSENTED') 
									<i class="fas fa-ban"></i> Sin asistencia
								@endif
							</td>
				    </tr>

					@endforeach
				    
				    
				  </tbody>
				</table>
	        </div>
	    </div>
	  </div>
	</div>
@endsection
