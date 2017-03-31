<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\CreatePostRequest;

class PostController extends Controller {

   public function __construct() {
     $this->middleware('auth'); // este protege todas las funciones de este controller
   }

   public function index() {
      //return "index";
      //$datos=Post::all();
            
      // Consultar todos los posts
      //$datos=Post::paginate(5);
      
      // Consultar todos los posts solo del usuario logueado
      //$datos = \Auth::user()->posts()->where('id',1)->paginate(5);
      $datos = \Auth::user()->posts()->paginate(5);
      
      return view('post.index')->
           with('datos',$datos);
   }

   public function create() {
      return view('post.create');
   }
   
   public function edit($id) {
            
      $post = Post::find($id);      
      return view('post.editar')->
              with('post', $post);
   }
   
   public function update(CreatePostRequest $request,$id) {
      $post = Post::find($id);
      $post->fill($request->all());
      
//      $post->titulo = $request->input('titulo');
//      $post->contenido = $request->input('contenido');
//      $post->activo = $request->input('activo');
      
      $post->save();     
      
      return redirect()->back()
         ->with('message_success','Se actualizo correctamente'); // regresamos a la misma vista
   }
   
   public function destroy($id) {
      $post = Post::find($id);
      $post->delete();
      return redirect()->back()
         ->with('message_success','Se elimino correctamente');; // regresamos a la misma vista
   }
   
   public function show($id) {
      return "Soy destroy: " . $id;
   }
   
   // Funcion para almacenar el POST
   //public function store(Request $request) { // sin validacion
   public function store(CreatePostRequest $request) {
      //$titulo = $request->input('titulo');      
      //$post = Post::create(['titulo'=>$request->input('titulo')]);
      
      //$post = Post::create($request->all()); 
            
      $post = new Post(($request->all()));   
      $user = \Auth::user(); // EL usuario que hizo login
      $user->posts()->save($post);            
                  
      // Alguna validacion 
       
      //$post->user_id=$user->id;     
      //$post->save();      
      
      // Redirect a una vista por su nombre (php artisan route:list)
      return redirect()
              ->route('articulos.index')
              ->with('message_success', 'Post guardado con exito'); // nombre de la ruta del index
   }
   
   public function index_angular() {
      return view('post.index_angular');
   }
   
   // La usará angular para consultar los posts
   public function todo_angular() {
      $post = Post::all();
      return $post;  // por default, Laravel regresa un JSON
   }
   
   // La usará angular para guardar un post
   public function postAngular(CreatePostRequest $request) {     
      
      if ($request->activo == "true") {
         $activo = true;
      } else {
         $activo = false;
      }
      
      $post = new Post([
          'titulo'=> $request->titulo,
          'contenido'=> $request->contenido,
          'activo'=> $activo,
      ]);   
      $user = \Auth::user(); // EL usuario que hizo login
      $user->posts()->save($post); 
      
      return "Registrado";
   }
   
   // La usará angular para eliminar un post
   public function eliminarAngular($id) {
      $post = Post::find($id);
      $post->delete();
      return "eliminado";
   }
   
   // La usará angular para actualizar un post
   public function actualizarAngular(Request $request, $id) {
      $post = Post::find($id);      
      $post->titulo = $request->input('titulo');
      $post->contenido = $request->input('contenido');
      //$post->activo = $request->input('activo');
      
      $post->save();   
            
      return "actualizado";
   }
}
