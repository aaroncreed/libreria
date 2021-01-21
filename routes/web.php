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

Route::get('/register',function(){
if (\Auth::User()->Nivel==1) {
	return view('auth.register');
}
return redirect('/login');

})->name('register')->middleware("auth");

 Route::get('/vender', 'libros@vender')->name('vender');
 Route::get('/ingresar', 'libros@ingresar')->name('ingresar');
 // Route::get('/conf', 'libros@conf')->name('conf');
Route::get('/home', 'libros@menu')->name('home');


 Route::get('/Nuevolibro', 'libros@nuevo')->name('home');
  Route::post('/guardarLibro', 'libros@guardar')->name('glibro');
 Route::get('/editarLibro/{id}','libros@editar');
  Route::post('/actualizarLibro', 'libros@actualizar')->name('dlibro');
 
 Route::get('/libro','libros@index');







Route::get('/devoluciones', 'libros@devoluciones')->name('devoluciones');
Route::post('/realizarDevolucion','entradas_detalle@realizarDevolucion');
Route::get('/devolverEntrada/{id}',"entradas@devolverEntrada");
Route::get('/reporteSalida/{id}',"entradas@reporteSalida");
Route::get('/reporteEntrada/{id}',"entradas@reporteEntrada");






 


  Route::get('/insertasEditorial', 'casaeditorial@ingresarEditorial')->name('insertasEditorial');
   Route::get('/obtenerEditorial', 'casaeditorial@obtenerEditorial')->name('obtenerEditorial');
   Route::get('/obtenerEditorialTabla', 'casaeditorial@obtenerEditorialTabla')->name('obtenerEditorialTabla');

    Route::get('/obtenerMedidas', 'medidas@obtenerMedidas')->name('obtenerMedidas');

    Route::post('/verificarExistencia','libros@verificarExistencia');
    Route::post('/verificarExistenciaFinal','libros@verificarExistenciaFinal');
    route::get('/obetnerDescuento/{id}','descuentos@obetnerDescuento');

    Route::post('/guardarEntrada',"libros@guardarEntrada");

Route::get('/ticket/{param}/{param2}', 'libros@ticket')->name('ticket');
Route::get('/generarTicket/{id}','ventas@generarTicket');


route::get("/configuracion","HomeController@configuracion");

route::get("/casaeditorial_get/{id}","casaeditorial@obtenerEditorialEspecifica");
route::post("/casaeditorial_add","casaeditorial@ingresarcasaeditorial");
route::get("/eli_casaeditorial/{id}","casaeditorial@cambiarEstatus");
route::post("/casaeditorial_addupdate","casaeditorial@actualizar");

route::get("/clientes_get/{id}","clientes@obtenerClientes");
route::get("/clientes_get_all","clientes@obtenerClientesTodos");
route::post("/clientes_add","clientes@ingresarclientes");
route::post("/clientes_addupdate","clientes@actualizar");
route::get("/eli_clientes/{id}","clientes@baja");


route::get("/descuentos_get/{id}","descuentos@obtenerdescuentos");
route::get("/todosDescuentos","descuentos@todosDescuentos");

route::post("/descuentos_add","descuentos@ingresardescuentos");
route::post("/descuentos_addupdate","descuentos@actualizar");
route::get("/eli_descuento/{id}","descuentos@baja");


route::get("/medidas_get/{id}","medidas@obtenermedidasg");
route::get("/medidasTodas","medidas@medidasTodas");
route::post("/medidas_add","medidas@ingresarmedidas");
route::post("/medidas_addupdate","medidas@actualizar");
route::get("/eli_medidas/{id}","medidas@baja");


route::get("/proveedor_get/{id}","proveedor@obtenerproveedor");
route::get("/proveedorTodas","proveedor@proveedorTodas");

route::post("/proveedor_add","proveedor@ingresarproveedor");
route::post("/proveedor_addupdate","proveedor@actualizar");
route::get("/eli_proveedor/{id}","proveedor@baja");

route::get("/tipocliente_get/{id}","tipocliente@obtenertipocliente");
route::get("/tipoClienteTablaTodas","tipocliente@tipoClienteTablaTodas");

route::post("/tipocliente_add","tipocliente@ingresartipocliente");
route::post("/tipocliente_addupdate","tipocliente@actualizar");
route::get("/eli_tipocliente/{id}","tipocliente@baja");

route::get("/tipocobro_get/{id}","tipocobro@obtenertipocobro");
route::get("/tipocobroTablaTodas","tipocobro@tipocobroTablaTodas");

route::post("/tipocobro_add","tipocobro@ingresartipocobro");
route::post("/tipocobro_addupdate","tipocobro@actualizar");
route::get("/eli_tipocobro/{id}","tipocobro@baja");

route::get("/tipoentrada_get/{id}","tipoentrada@obtenertipoentrada");
route::get("/tipoentradaTablaTodas","tipoentrada@tipoentradaTablaTodas");

route::post("/tipoentrada_add","tipoentrada@ingresartipoentrada");
route::post("/tipoentrada_addupdate","tipoentrada@actualizar");
route::get("/eli_tipoentrada/{id}","tipoentrada@baja");


route::get("/reporteVenta/{inicio}/{fin}/{proveedores}","ventas_detalle@reporteVenta");
// Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');
