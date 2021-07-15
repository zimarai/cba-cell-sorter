@extends('layouts.base')

@section('title', 'Blog - Blade Templatas Laravel')

@section('konten')
  <div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-body text-center">
					<h3>Operación exitosa</h3>
					<p>{{ $message }}</p>
					<h2 class="big-code">{{$reservation_code}}</h2>
					<p><a href="/admin" class="btn btn-success"><i class="fa fa-arrow-left"></i>  Volver</a></p>
			</div>
		</div>
	</div>
@endsection