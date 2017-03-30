<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\CreatePostRequest;

class PostController extends Controller {

   public function __construct() {
      //$this->middleware('auth'); // este protege todas las funciones de este controller
   }

   public function index() {
      //return "index";
      //$datos=Post::all();
      $datos=Post::paginate(5);
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
      
      return redirect()->back(); // regresamos a la misma vista
   }
   
   public function destroy($id) {
      $post = Post::find($id);
      $post->delete();
      return redirect()->back(); // regresamos a la misma vista
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
      
      // Alguna validacion
      
      $post->save();      
      
      // Redirect a una vista por su nombre (php artisan route:list)
      return redirect()->route('articulos.index'); // nombre de la ruta del index
   }
}
