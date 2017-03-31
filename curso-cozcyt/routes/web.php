<?php

// La Pagina principal (Le damos un nombre a la ruta)
Route::get('/', 'PostController@index')->name('home');

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
Route::get('controlador', 'HomeController2@index' );

// Mandar llamar una funcion con parametros desde un controller.
Route::get('controlador2/{id}', 'HomeController2@index2');

// Controller que manda llamar una vista
Route::get('controlador3', 'HomeController2@index3');

// Controller que manda llamar una vista de Bootstrap
Route::get('controlador4', 'HomeController2@goModulo');

// Controller que manda llamar una vista de Bootstrap
Route::get('posts/index', 'HomeController2@getPost');

Route::get('/home', 'HomeController@index');

Route::get('protegida', function () {
    return "<h1>Ruta Protegida!!</h1>";
})->middleware('auth'); // Proteger solo esta URL

Route::get('desprotegida', function () {
    return "<h1>Recurso desprotegida!!</h1>";
});

// Ruta que manda llamar una funcion protegida en un Controller
Route::get('funcion', 'HomeController@index2');

/**
 * Rutas de la aplicacion
 */
Auth::routes();

// Typical "CRUD" routes to a controller with a single line of code. 
Route::resource('articulos','PostController');

// Ruta para probar Angular
Route::get('index/angular', 'PostController@index_angular');

// Angular hara una peticion a esta URL
Route::get('consulta/todo', 'PostController@todo_angular');

Route::post('registrar/post', 'PostController@postAngular');

Route::post('eliminar/post/{id}', 'PostController@eliminarAngular');

Route::post('update/post/{id}', 'PostController@actualizarAngular');
