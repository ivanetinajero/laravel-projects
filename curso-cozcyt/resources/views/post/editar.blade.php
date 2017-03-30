@extends('layouts.principal')

@section('contenido')
  Editar post
  
  @include('partial.mensaje') 
  
  {!! Form::model($post, ['route' => ['articulos.update', $post->id], 'method' => 'PUT']) !!}   

   @include('partial.formulario')   
   {!! Form::submit('Actualizar',['class'=>'btn btn-default']) !!}   
   
  {!! Form::close() !!}

@endsection
