<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Routing\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('foo', function () {
//     return 'Hello World';
// });

// Route::get('permiso', 'PermisoController@create');

// Route::get('admin/sistema/permisos', 'PermisoController@index')->name('permiso');

// Route::get('permiso/{nombre}', function ($nombre) {
//     return $nombre;
// })->where('nombre', '[0-9]+')->name('permiso');

// Route::get('/','InicioController@index');

// Route::get('/admin/permiso', 'Admin/PermisoController@index')->name('permiso');

Route::group(['prefix'=> 'admin', 'namespace'=> 'Admin'], function (){
    Route::get('permiso', 'PermisoController@index')->name('permiso'); 
    Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');
    // Rutas del Menu//
    Route::get('menu', 'MenuController@index')->name('menu');
    Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
    Route::post('menu', 'MenuController@guardar')->name('guardar_menu');
    Route::post('menu/guardar-orden', 'MenuController@guardarOrden')->name('guardarOrden');
    //Rutas del Rol//
    Route::get('rol', 'RolController@index')->name('rol');
    Route::get('rol/crear', 'RolController@Crear')->name('crear_rol');
    Route::post('rol', 'RolController@guardar')->name('guardar_rol');
    Route::get('rol/{id}/editar', 'RolController@editar')->name('editar_rol');
    Route::put('rol/{id}', 'RolController@actualizar')->name('actualizar_rol');
    Route::delete('rol/{id}', 'RolController@eliminar')->name('eliminar_rol');
    //Rutas del MenuRol//
    Route::get('menu-rol', 'MenuRolController@index')->name('menu_rol');
    Route::post('menu-rol', 'MenuRolController@guardar')->name('guardar_menu_rol');
});