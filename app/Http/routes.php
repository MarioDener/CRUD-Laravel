<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/',[
  'uses'  =>  'Controlador@index',
  'as'  =>  'home_path'
]);

Route::get('contactos/crear',[
  'uses'  =>  'Controlador@create',
  'as'  =>  'get_contactos_create'
]);

Route::post('contactos/crear',[
  'uses'  =>  'Controlador@store',
  'as'  =>  'post_contactos_create'
]);

Route::get('contactos/editar/{id}',[
  'uses' => 'Controlador@show',
  'as' => 'get_contactos_edit'
])->where('id','[0-9]+');

Route::patch('contactos/editar/{id}',[
  'uses' => 'Controlador@update',
  'as' => 'post_contactos_edit'
])->where('id','[0-9]+');

Route::get('contactos/eliminar/{id}',[
  'uses'  =>  'Controlador@destroy',
  'as'  =>  'get_contactos_delete'
])->where('id','[0-9]+');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
