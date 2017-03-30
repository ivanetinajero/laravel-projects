@extends('layouts.principal')

@section('contenido')
<h1>Lista de Posts</h1>

<a href="{{route('articulos.create')}}" class="btn btn-default" role="button" 
   title="Crear un nuevo Post" >Crear Post</a><br><br>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>              
              <th>Título</th>                
              <th>Contenido</th>                
              <th>Activo</th>                              
              <th></th>                              
              <th></th>                              
            </tr>
          </thead>
          <tbody>
            @foreach ($datos as $post)
               <tr>
                 <td>{{$post->id}}</td>
                 <td>{{$post->titulo}}</td>
                 <td>{{$post->contenido}}</td>
                 <td>{{$post->activo}}</td> 
                 <td><a href="{{route('articulos.edit',$post->id )}}" 
                        class="btn btn-default btn-sm" role="button" 
                        title="Crear un nuevo Post" >Editar</a>
                 </td> 
                 <td>                   
                    {!! Form::model($post, ['route' => ['articulos.destroy', $post->id], 'method' => 'DELETE']) !!}   
                    
                    <button type='submit' class="btn btn-danger btn-sm" 
                            onclick='return confirm("¿Estas seguro?")'>Eliminar</button>                     
                    {!! Form::close() !!}                   
                 </td> 
               </tr> 
             @endforeach            
          </tbody>           
        </table>
      {{ $datos->links() }}
@endsection
