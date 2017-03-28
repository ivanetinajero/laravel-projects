@extends('layouts.principal')

@section('contenido')
         
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>              
              <th>Título</th>                
              <th>Contenido</th>                
              <th>Activo</th>                              
            </tr>
          </thead>
          <tbody>
            @foreach ($datos as $post)
               <tr>
                 <td>{{$post->id}}</td>
                 <td>{{$post->titulo}}</td>
                 <td>{{$post->contenido}}</td>
                 <td>{{$post->activo}}</td> 
               </tr> 
             @endforeach            
          </tbody>           
        </table>
      
@endsection
