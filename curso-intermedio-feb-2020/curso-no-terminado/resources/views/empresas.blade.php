@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro de empresas</div>
                <div class="card-body">                   
                    <div class="card" >
                      <div class="card-body">
                        <h5 class="card-title">Subir archivo de empresas</h5>
                        @if (session('mensaje'))
                            <div class="alert alert-success" role="alert">
                                {{ session('mensaje') }}
                            </div>
                        @endif
                        <form action="{{ route('importar.empresas') }}" method="post" enctype="multipart/form-data">
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
                            REPORTES EXCEL
                        </div>
                        <div class="card-body">                        
                            <p class="card-text">Exportar Empresas a EXCEL</p>
                            <a href="{{ route('exportar.empresas') }}" class="btn btn-primary">Exportar Excel</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            REPORTES PDF
                        </div>
                        <div class="card-body">                        
                            <p class="card-text">Exportar empresas a PDF</p>
                            <a href="{{ route('pdf.empresas') }}" class="btn btn-primary">Exportar PDF</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            GRAFICAS
                        </div>
                        <div class="card-body">                        
                            <p class="card-text">Grafica de Empresas</p>
                            <a href="{{ route('grafica.empresas') }}" class="btn btn-primary">Grafica</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
