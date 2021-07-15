@extends('layouts.base')

@section('title', 'Blog - Blade Templatas Laravel')

@section('konten')
  <div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-body text-center">
                    <form method="POST" action="{{ route('modificar-confirmar') }}">
                        <input type="hidden" name="reservation_code" value="{{$reservation_code}}">
                        <input type="hidden" name="operation" value="{{$operation}}">
                        @csrf
                        <h3>Modificar reserva</h3>
                        <p>Estas tratando de modificarla reserva con código:</p>
                        <h2 class="big-code">{{$reservation_code}}</h2>
                        <h2 class="big-code">Acción: {{$operation}}</h2>
                        <table class="table table-bordered table-striped table-sm text-left">
                            @include('includes.appointmentDetailCancel')
                        </table>
                        <a href="/admin" class="btn btn-link" style="color: #444444;text-decoration: underline;">Volver</a>
                        <button class="btn btn-danger" type="submit">Editar</button>
                    </div>
                </form>
            </div>
		</div>
	</div>
@endsection