<?php

// La Pagina principal
Route::get('/', function () {
    return view('home.inicio');
    //return view("home.index"); // Vista dentro de carpeta
});

// Una ruta con codigo HTML estatico
Route::get('prueba', function () {
    return "<h1>Hola Mundo!!</h1>";
});

// Ruta con un parametro
Route::get('prueba2/{id}', function ($id2) {
    return "Hola bienvenido : " . $id2;
});

// Ruta con 2 parametro
Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
     return "Post : " . $postId . " Comment: " . $commentId;
});

// Mandar llamar una funcion, pero de un controller
Route::get('controlador', 'HomeController@index' );

// Mandar llamar una funcion con parametros desde un controller.
Route::get('controlador2/{id}', 'HomeController@index2');

// Controller que manda llamar una vista
Route::get('controlador3', 'HomeController@index3');

// Controller que manda llamar una vista de Bootstrap
Route::get('controlador4', 'HomeController@goModulo');
