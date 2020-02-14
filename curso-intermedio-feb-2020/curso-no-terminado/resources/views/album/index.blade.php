@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card text-dark bg-light">
		<div class="card-header">
			ALBUM DE FOTOS			         
		</div>
		<div class="card-body">			
			<form action="{{ route('album.store') }}" enctype="multipart/form-data" class="m-3" method="post">
				@if (session('mensaje'))
	                <div class="alert alert-success" role="alert">
	                    {{ session('mensaje') }}
	                </div>
	            @endif  
				@error('archivo')
				    <div class="alert alert-danger">{{ $message }}</div>
				@enderror
				@csrf
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="customFile" name="archivo">
					<label class="custom-file-label" for="customFile">Seleccionar foto</label>
				</div>

				<label>Descripción</label>
				<textarea class="form-control" aria-label="With textarea" name="descripcion"></textarea>
				<button type="submit" class="btn btn-success mt-3">Guardar Foto</button>
			</form>				
		</div>

		<div class="row">
		 @foreach ($archivos as $archivo)
	         <div class="col-md-4">
	          <div class="card mb-4 shadow-sm">
	            <img src="{{ Storage::url($archivo->ruta) }}" class="img-fluid" alt="Responsive image" >
	            <div class="card-body">
	              <p class="card-text">{{ $archivo->descripcion}} </p>
	              <div class="d-flex justify-content-between align-items-center">
	                <div class="btn-group">
	                  <a href="{{ Storage::url($archivo->ruta) }}" target="_blank" class="btn btn-sm btn-success">Descargar</a>
	                </div>
	              </div>
	            </div>
	           </div>
	          </div>
	       @endforeach   
        </div> 
  </div>		
</div>

@endsection

