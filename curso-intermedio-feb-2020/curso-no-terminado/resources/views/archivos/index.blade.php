@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card text-dark bg-light">
		<div class="card-header">
			Subir archivos
			@if (session('mensaje'))
                <div class="alert alert-success" role="alert">
                    {{ session('mensaje') }}
                </div>
            @endif
		</div>
		<div class="card-body">			
			<form action="{{ route('archivos.store') }}" enctype="multipart/form-data" class="m-3" method="post">
				@csrf
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="customFile" name="archivo">
					<label class="custom-file-label" for="customFile">Seleccionar archivo</label>
				</div>

				<label>Descripción</label>
				<textarea class="form-control" aria-label="With textarea" name="descripcion"></textarea>
				<button type="submit" class="btn btn-success mt-3">Subir archivo</button>
			</form>				
		</div>

		<div class="table-responsive">
			<table class="table table-hover table-sm table-bordered">
				<caption>Listado de archivos</caption>
				<thead class="thead-dark">
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Descripción</th>
						<th scope="col">Ruta</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($archivos as $archivo)
						<tr>
							<th scope="row">{{ $archivo->id }}</th>
							<td>{{ $archivo->descripcion }}</td>
							<td><a href="{{ Storage::url($archivo->ruta) }}">{{ $archivo->ruta }}</a></td>
						</tr>
					@endforeach
				</tbody>				
			</table>
		</div>
	</div>
</div>

@endsection

