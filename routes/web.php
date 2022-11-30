<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlmacenesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DetalleventasController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ReferenciasController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VentasController;

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
Route::get('/prueba', function () {
    return view('prueba');
});
Route::get('/clientes', function () {
    return view('clientes');
});
Route::get('/productos', function () {
    return view('productos');
});
Route::get('/referencias', function () {
    return view('referencias');
});
Route::get('/detalleventas', function () {
    return view('detalleventas');
});
Route::get('/marcas', function () {
    return view('marcas');
});
Route::get('/users', function () {
    return view('users');
});
Route::get('/ventas', function () {
    return view('ventas');
});
Route::get('/almacenes', function () {
    return view('almacenes');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// ruta detalleventas
Route::get('api/detalleventas/index', 'DetalleventasController@index');
Route::post('api/detalleventas/guardar', 'DetalleventasController@store');
Route::put('api/detalleventas/actualizar', 'DetalleventasController@update');
Route::get('api/detalleventas/guardar', 'DetalleventasController@getselect');
Route::delete('api/detalleventas/eliminar', 'DetalleventasController@destroy');

// ruta clientes
Route::get('api/clientes/index', 'ClientesController@index');
Route::post('api/clientes/guardar', 'ClientesController@store');
Route::put('api/clientes/actualizar', 'ClientesController@update');
Route::get('api/clientes/guardar', 'ClientesController@getselect');
Route::delete('api/clientes/eliminar', 'ClientesController@destroy');

// ruta detalledeventas
Route::get('api/detalledeventas/index', 'detalledeventasController@index');
Route::post('api/detalledeventas/guardar', 'detalledeventasController@store');
Route::put('api/detalledeventas/actualizar', 'detalledeventasController@update');
Route::get('api/detalledeventas/guardar', 'detalledeventasController@getselect');
Route::delete('api/detalledeventas/eliminar', 'detalledeventasController@destroy');

// ruta marcas
Route::get('api/marcas/index', 'MarcasController@index');
Route::post('api/marcas/guardar', 'MarcasController@store');
Route::put('api/marcas/actualizar', 'MarcasController@update');
Route::get('api/marcas/guardar', 'MarcasController@getselect');
Route::delete('api/marcas/eliminar', 'MarcasController@destroy');

// ruta productos
Route::get('api/productos/index', 'ProductosController@index');
Route::post('api/productos/guardar', 'ProductosController@store');
Route::put('api/productos/actualizar', 'ProductosController@update');
Route::get('api/productos/guardar', 'ProductosController@getselect');
Route::delete('api/productos/eliminar', 'ProductosController@destroy');

// ruta referencias
Route::get('api/referencias/index', 'ReferenciasController@index');
Route::post('api/referencias/guardar', 'ReferenciasController@store');
Route::put('api/referencias/actualizar', 'ReferenciasController@update');
Route::get('api/referencias/guardar', 'ReferenciasController@getselect');
Route::delete('api/referencias/eliminar', 'ReferenciasController@destroy');

// ruta users
Route::get('api/users/index', 'UsersController@index');
Route::post('api/users/guardar', 'UsersController@store');
Route::put('api/users/actualizar', 'UsersController@update');
Route::get('api/users/guardar', 'UsersController@getselect');
Route::delete('api/users/eliminar', 'UsersController@destroy');

// ruta ventas
Route::get('api/ventas/index', 'VentasController@index');
Route::post('api/ventas/guardar', 'VentasController@store');
Route::put('api/ventas/actualizar', 'VentasController@update');
Route::get('api/ventas/guardar', 'VentasController@getselect');
Route::delete('api/ventas/eliminar', 'VentasController@destroy');