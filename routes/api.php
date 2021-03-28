<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

	Route::resource('categorias', 'CategoriaController');
	Route::resource('notificacionpush', 'NotificacionpushController');
	Route::post('notificacionpush/enviar', 'NotificacionpushController@enviar');

	Route::resource('usuarios', 'UsuarioController');
	Route::get('usuario/firebaseid/{firebaseid}', 'UsuarioController@showbyfirebaseid');
	Route::get('likes/{postid}', 'LikeController@likespost');
	route::post('likes/crear', 'LikeController@crearlike');
	route::post('likes/eliminar', 'LikeController@eliminarlike');

	Route::resource('publicidades', 'PublicidadController');

	Route::resource('publicidadescategorias', 'PublicidadcategoriasController');

	Route::resource('posts', 'PostController');
	Route::post('posts/crear', 'PostController@crearpost');
	Route::get('postconuser/{postid}', 'PostController@postuser');


	Route::resource('comentarios', 'ComentarioController');
	Route::get('comentarios/postid/{postid}', 'ComentarioController@comentariobypost');
	Route::get('comentario/{comentario}', 'ComentarioController@comentario');
	Route::get('comentario/respuestaid/{respuesta}', 'ComentarioController@respuestas');
	Route::post('comentario/insertar/', 'ComentarioController@insertarcomentario');