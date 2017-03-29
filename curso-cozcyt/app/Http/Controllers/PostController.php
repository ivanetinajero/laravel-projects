<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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
      return "Soy edit: " . $id;
   }
   
   public function destroy($id) {
      return "Soy destroy: " . $id;
   }
   
   public function show($id) {
      return "Soy destroy: " . $id;
   }
   // Funcion para almacenar el POST
   public function store(Request $request) {
      $titulo = $request->input('titulo');      
      //$post = Post::create(['titulo'=>$request->input('titulo')]);
      
      $post = Post::create($request->all());      
      // Redirect a una vista por su nombre (php artisan route:list)
      return redirect()->route('articulos.index'); // nombre de la ruta del index
   }
}
