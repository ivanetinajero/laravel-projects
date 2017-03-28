<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       return "Hola desde controlador";
    }
    
    // Funcion que recibe un parametro via URI
    public function index2($id){
       return "UserId: " . $id;
    }
    
    // Funcion que renderiza una vista
    public function index3(){       
       //return view("home.index"); // Vista dentro de carpeta
       $curso1 = "Soy una variable1";
       $curso2 = "Soy una variable2";
       $edad=20;
       $names =  ["itinajero", "gonzalez", "ruiz"];
       return view("home.index")->
               with("myvar1",$curso1)->
               with("myvar2",$curso2)->
               with("edad",$edad)->
               with("users", $names);
    }
       
    public function goModulo(){
       return view("home.modulo");
    }
    
    public function getPost(){
              
//       \DB::table('posts')
//            ->where('id', 2)
//            ->update(['activo' => 0]);
//       
//       \DB::table('posts')->where('id', 1)->delete();
       
       //$posts2 = \DB::table('posts')->where("activo",true)->get();
       
       //$posts3 = \DB::table('posts')->select("id","titulo")->get();
       
       //$posts4 = \DB::table('posts')->count();
       
       //return $posts;       
       $posts = \DB::table('posts')->get();
       return view("post.index")->
               with("datos",$posts);
       
    }
}
