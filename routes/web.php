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

Route::get('/', 'API\SinespController@Index')->name('Index');
Route::get('resultado-json', 'API\SinespController@resultadoJSON')->name('resultado-json');
Route::post('buscar', 'API\SinespController@BuscaCarro')->name('buscar');
Route::post('buscar-json', 'API\SinespController@BuscaCarroJSON')->name('buscar-json');
Route::get('buscar-json-get/{placa}', 'API\SinespController@BuscaCarroJSONGET')->name('buscar-json-get');
