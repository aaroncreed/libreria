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
    return redirect('/login');
});

Auth::routes();
Route::post("/loguiar","Auth\CustomLoginController@authenticate");
// Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/libro', 'libros@index')->name('home');
 Route::get('/vender', 'libros@vender')->name('vender');
 Route::get('/ingresar', 'libros@ingresar')->name('ingresar');
 Route::get('/conf', 'libros@conf')->name('conf');
Route::get('/home', 'libros@menu')->name('home');
Route::get('/devoluciones', 'libros@devoluciones')->name('devoluciones');


Route::get('/devolverEntrada/{id}',"entradas@devolverEntrada");

  Route::post('/guardarLibro', 'libros@guardar')->name('home');


  Route::get('/insertasEditorial', 'casaeditorial@ingresarEditorial')->name('insertasEditorial');
   Route::get('/obtenerEditorial', 'casaeditorial@obtenerEditorial')->name('obtenerEditorial');

    Route::get('/obtenerMedidas', 'medidas@obtenerMedidas')->name('obtenerMedidas');

    Route::post('/verificarExistencia','libros@verificarExistencia');
    Route::post('/verificarExistenciaFinal','libros@verificarExistenciaFinal');

    Route::post('/guardarEntrada',"libros@guardarEntrada");

Route::get('/ticket', 'libros@ticket')->name('ticket');






// Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');
