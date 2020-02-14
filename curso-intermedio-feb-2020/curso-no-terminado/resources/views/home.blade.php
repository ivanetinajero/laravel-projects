@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <div class="col-md-12 mt-3">
                        <a class="btn btn-primary" href="{{ route('enviar') }}" role="button">Enviar correo</a>    
                    </div>                    
                    <hr>
                    <div class="card" >
                      <div class="card-body">
                        <h5 class="card-title">Subir archivo</h5>
                        @if (session('mensaje'))
                            <div class="alert alert-success" role="alert">
                                {{ session('mensaje') }}
                            </div>
                        @endif
                        <form action="{{ route('importar.becario') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile02" name="documento">
                                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                </div>
                            </div>

                            @error('documento')
                                <div class="alert alert-danger mt-3" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="input-group m-3">
                                <button type="submit" class="btn btn-dark">Subir</button>
                            </div>                               
                        </form>
                      </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Exportar excel
                        </div>
                        <div class="card-body">                        
                            <p class="card-text">Exporta parte de la tabla becarios.</p>
                            <a href="{{ route('exportar.excel') }}" class="btn btn-primary">Exportar</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Exportar Becarios a PDF
                        </div>
                        <div class="card-body">                        
                            <p class="card-text">Exporta parte de la tabla becarios a PDF</p>
                            <a href="{{ route('pdf.becarios') }}" class="btn btn-primary">Exportar</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Grafica de Becarios
                        </div>
                        <div class="card-body">                        
                            <p class="card-text">Grafica de becarios</p>
                            <a href="{{ route('grafica.becarios') }}" class="btn btn-primary">Grafica</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            UPLOAD ARCHIVOS
                        </div>
                        <div class="card-body">                        
                            <p class="card-text">Ir a la vista</p>
                            <a href="{{ route('archivos.index') }}" class="btn btn-primary">Vista Archivos</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            ALBUM DE FOTOS
                        </div>
                        <div class="card-body">                        
                            <p class="card-text">Ir al Album</p>
                            <a href="{{ route('album.index') }}" class="btn btn-primary">Vista Album</a>
                        </div>
                    </div>    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
