<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['verify' => true]);
// Definimos la ruta para enviar correo de prueba
Route::get('/enviar', 'CorreosController@enviar')->name('enviar')->middleware('correo');

// Ruta para subir archivo de excel
Route::post('/importarexcel', 'BecariosController@importar')->name('importar.becario');

// Ruta para exportar a excel
Route::get('/exportarexcel', 'BecariosController@exportar')->name('exportar.excel');

// Ruta para exportar a pdf
Route::get('/exportarpdf', 'BecariosController@pdf')->name('pdf.becarios');

// Ruta para generar grafica
Route::get('/grafica', 'BecariosController@grafica')->name('grafica.becarios');

// EMPRESAS
Route::get('/empresas', function () {
    return view('empresas');
});

// Ruta para subir archivo de excel de empresas
Route::post('/importarempresas', 'EmpresasController@importar')->name('importar.empresas');

// Ruta para exportar empresas a excel
Route::get('/exportarempresas', 'EmpresasController@exportar')->name('exportar.empresas');

// Ruta para exportar empresas a pdf
Route::get('/pdfempresas', 'EmpresasController@pdf')->name('pdf.empresas');

// Ruta para generar grafica de empresas
Route::get('/graficaempresas', 'EmpresasController@grafica')->name('grafica.empresas');

// Ruta para mostrar la vista para subir archivos
Route::get('/archivos', 'ArchivosController@index')->name('archivos.index');

// Ruta para para subir archivos
Route::post('/store', 'ArchivosController@store')->name('archivos.store');

// Ruta para mostrar el Album de fotos
Route::get('/albums-index', 'AlbumController@index')->name('album.index');

// Ruta para para subir fotos al album 
Route::post('/album-store', 'AlbumController@store')->name('album.store');